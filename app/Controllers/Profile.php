<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header',$data);
        echo view ('/profile');
        echo view('templates/footer');
    }
}
