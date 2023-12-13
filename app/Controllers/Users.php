<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index() // this is login
    {
        $data = [];
        helper(['form']);

        if($this->request->getMethod() == 'post'){
            $rules = [
				'email' => 'required|valid_email',
				'password' => 'required|validateUser[email,passowrd]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

            if(! $this->validate($rules,$errors)){
                $data['validation'] = $this->validator;
            }else{
                // store the user
                $model = new UserModel();

				$user = $model->where('email', $this->request->getVar('email'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/home');


            }

        }

        echo view('templates/header',$data);
        echo view ('login');
        echo view('templates/footer');
    }

    private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

    public function register(){
        $data = [];
        helper(['form']);

        if($this->request->getMethod() == 'post'){
            $rules = [
				'firstname' => 'required',
				'lastname' => 'required',
				'email' => 'required|valid_email|is_unique[users.email]',
				'password' => 'required',
				'confirm-password' => 'matches[password]',
			];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                // store the user

                $model = new UserModel();
                
                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];

                $model->save($newData);

                $session = session();
                $session->setFlashdata('success','Successful Registration');
                return redirect()->to('/'); 
            }

        }



        echo view('templates/header',$data);
        echo view ('register');
        echo view('templates/footer');
    }
}
