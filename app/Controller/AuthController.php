<?php

namespace App\Controller;

use App\Model\User;
use core\verification;

class AuthController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->view('sign-up');
    }

    public function login()
    {
        $this->view('login');
    }
    public function Verify()
    {
        $this->view('emailVerify');
    }

    // public function loginUser()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         extract($_POST);
    //         $userlog = $this->user->selectUser($email);
    //         if (count($userlog) != 0) {
    //             if (password_verify($password, $userlog['password'])) {
                
    //             if ($userlog['token'] != null) {
    //                 $_SESSION['token'] = $token;
    //             }
    //             $_SESSION['idUser'] = $userlog['id'];
    //             $_SESSION['roleUser'] = $userlog['role_id'];
    //             $_SESSION['emailUser'] = $userlog['email'];
    //             $_SESSION['nameUser'] = $userlog["name"];

    //             if ($_SESSION['roleUser'] == 1) header("location:" . APP_URL."Team");
    //             if ($_SESSION['roleUser'] == 2)  header("location:" . APP_URL);
                
    //         }
    //         }
    //     }
    // }
    public function loginUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        extract($_POST);
        $userlog = $this->user->selectUser($email);
        if ($userlog !== null) { // Check if $userlog is not null
            if (password_verify($password, $userlog['password'])) {
                if ($userlog['token'] != null) {
                    $_SESSION['token'] = $userlog['token']; // Assign token value to session
                }
                $_SESSION['idUser'] = $userlog['id'];
                $_SESSION['roleUser'] = $userlog['role_id'];
                $_SESSION['emailUser'] = $userlog['email'];
                $_SESSION['nameUser'] = $userlog["name"];

                if ($_SESSION['roleUser'] == 1) {
                    header("location:" . APP_URL."Team");
                    exit(); // Terminate script after redirection
                }
                if ($_SESSION['roleUser'] == 2) {
                    header("location:" . APP_URL);
                    exit(); // Terminate script after redirection
                }
            }
        }
    }
    // Handle cases where login fails or $_SERVER['REQUEST_METHOD'] != 'POST'
    // Add appropriate actions, such as error messages or redirection to a login page.
}


    public static function emailVerfy()
    {
        require(__DIR__ . '../../../view/emailVerfy.php');
    }

    public function registration()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'regester') {
            $fullName = test_input($_POST['fullname']);
            $email = test_input($_POST['email']);
            $password = test_input($_POST['password']);
            // if (!verification::verfyEmail($email)) {
            //     $errors["email"] = "this email is not valid";
            // }
            // if (!verification::verfyName($fullName)) {
            //     $errors["name"] = "this name is not valid";
            // }
            // if (!verification::verfyPassword($password)) {
            //     $errors["password"] = "this password is not valid";
            // }
            if (count($errors) == 0) {

                $generatedID = substr(uniqid(), 0, 8);
                $this->user->setFullName($fullName);
                $this->user->setEmail($email);
                $password = password_hash($password, PASSWORD_DEFAULT);
                $this->user->setPassword($password);
                $this->user->setRoleId(2);
                $this->user->setVerifyCode($generatedID);
                if ($this->user->registerUser()) {
                    
                    $message = "<body class='bg-light'><div class='container'>
                    <div style='display: flex; justify-content: center;'>
                    <img class='ax-center my-10' style='width: 80px;' src='https://assets.bootstrapemail.com/logos/light/square.png' />
                    </div><div class='card p-6 p-lg-10 space-y-4'><h1 class='h3 fw-700'>
                    Verfy Code</h1><p>
                    Thank you for registering with us. Your verification code is:
                    <span style='color: red; font-size: 30px; font-weight: bold;'>" . $generatedID . "</span><br><br>
                    Please use this code to complete the verification process. If you have any 
                    questions or encounter any issues, feel free to contact our support team.
                    </p><a class='btn btn-primary p-3 fw-700' href='".APP_URL."'>Visit Website</a>
                    </div></div></body>";
                    PhpMailerSend::sendMail($this->user->getFullName(), "valid email", $message, $this->user->getEmail());
                    header("location:" . APP_URL);
                }
            } else {
                echo "errors";
            }
        } else {
            header("location:" . APP_URL . "Auth");
        }
    }

    public function verfyEmailRegistre($dataForm)
    {
        $verfy = $dataForm['verfyEmail'];
        if ($verfy == $_SESSION['generateID']) {
            extract($_SESSION['tempPostRegister']);
            $roleuserID = 2;
            // $result=LoginModel::RegistreUserSucces($name,$email,$password,$roleuserID);
            if ($result) return 'home';
        } else return 'emailVerfy';
    }
}
