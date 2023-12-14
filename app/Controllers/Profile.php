<?php

namespace App\Controllers;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $data = [];

        // check whether they have filled the data or not

        $tempModel = new UserModel();
        $userData = session()->get();
        $queryData = $tempModel->getUserAttribute($userData['id']);

        if($queryData == false){
            // give an alert ?
        }else{
            // 
        }

    

        echo view('templates/header',$data);
        echo view ('/profile');
        echo view('templates/footer');
    }

    public function updateUser(){

        $dataToView = [];
        $request = \Config\Services::request();
        $data = $request->getPost(); 

        $loggedUserData = session()->get();
        $userModel = new UserModel();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // print($data['weight']);

        // $data['age'] = (int)$data['age'];
        // $data['height'] = (int)$data['height'];
        // $data['weight'] = (int)$data['weight'];


        $userModel->updateUserAttribute($loggedUserData['id'],$data);
        return redirect()->to('/profile');

    }
}


