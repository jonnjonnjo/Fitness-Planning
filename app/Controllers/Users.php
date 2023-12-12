<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        echo view('templates/header',$data);
        echo view ('login');
        echo view('templates/footer');
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
                //return redirect('/');
            }

        }



        echo view('templates/header',$data);
        echo view ('register');
        echo view('templates/footer');
    }
}
