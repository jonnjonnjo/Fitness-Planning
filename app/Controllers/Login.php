<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index():string
    {
        return view("header").view("menu").view("login").view("footer");
    }
}
