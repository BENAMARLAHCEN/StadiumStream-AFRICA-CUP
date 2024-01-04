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

        $this->ClientView('profile',$userInfo);
    }

    public function saveChanges()
    {
        $id = $_SESSION['idUser'];
        $fullName = $_POST['name'];
        $email = $_POST['email'];

        $profileManager = new ProfileManager();
        $success = $profileManager->updateProfile($id, $fullName, $email);

        if ($success) {
            header('Location:'.APP_URL.'profile');
            exit;
        } else {
            echo "Failed to update user information.";
        }
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
