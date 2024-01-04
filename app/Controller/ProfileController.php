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
        $password = $_POST['password'];
    
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = __DIR__ . "\\..\\..\\public\\asset\\uploads\\userimage\\" . $image;
    
        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            echo "Failed to upload image.";
            return;
        }
    
        $profileManager = new ProfileManager();
        if ($profileManager->updateProfile($id, $fullName, $email, $image, $password)) {
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                header('Location:' . APP_URL . 'profile');
                exit;
            } else {
                echo "Failed to move uploaded image.";
            }
        } else {
            echo "Failed to update user information.";
        }
    }
    

}
