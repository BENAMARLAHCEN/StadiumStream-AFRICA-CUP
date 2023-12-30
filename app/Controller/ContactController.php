<?php

namespace App\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $this->view('contact');
    }
    public function sendMailer()
    {
        extract($_POST);
        PhpMailerSend::sendMail($username,$subject,$message);
        header("location:../");
    }
}
