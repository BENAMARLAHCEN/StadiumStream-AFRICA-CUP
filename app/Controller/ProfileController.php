<?php

namespace App\Controller;

use App\Model\ProfileManager;
use App\Model\ImageManager;
use App\Model\PasswordManager;

class ProfileController extends Controller
{
    public function index()
    {
        $id = $_SESSION['idUser'];
        $profileManager = new ProfileManager();
        $userInfo = $profileManager->getUserInfo($id);

        $this->ClientView('profile');
    }

    public function updateProfile()
    {
        $id = $_SESSION['idUser'];
        $username = $_POST['name'];
        $email = $_POST['email'];

        $profileManager = new ProfileManager();
        $profileManager->updateProfile($id, $username, $email);
    }

    public function updateImage()
    {
        $id = $_SESSION['idUser'];
        $image = $_POST['image'];

        $imageManager = new ImageManager();
        $imageManager->updateImage($id, $image);
    }

    public function updatePassword()
    {
        $id = $_SESSION['idUser'];
        $password = $_POST['password'];

        $passwordManager = new PasswordManager();
        $passwordManager->updatePassword($id, $password);
    }
}
