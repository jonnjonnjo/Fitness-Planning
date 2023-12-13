<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index():string
    {
        $data = [];
        echo view('templates/header',$data);
        echo view ('login');
        echo view('templates/footer');
    }
}
