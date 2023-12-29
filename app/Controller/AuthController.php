<?php

namespace App\Controller;

class AuthController extends Controller
{
    public function index()
    {
        $this->view('sign-up');
    }

    public function login()
    {
        $this->view('login');
    }


}
