<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        echo view('templates/header',$data);
        echo view ('home');
        echo view('templates/footer');
    }
}
