<?php

namespace App\Model;

class User extends Crud
{

    private string $fullName;
    private string $email;
    private string $password;
    private int $role_id;
    private string $VerifyCode;

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }


    public function getFullName()
    {
        return $this->fullName;
    }
    public function setFullName($FullName)
    {
        $this->fullName = $FullName;
    }


    public function getVerifyCode()
    {
        return $this->VerifyCode;
    }
    public function setVerifyCode($VerifyCode)
    {
        $this->VerifyCode = $VerifyCode;
    }



    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }
    public function getetRoleId()
    {
        return $this->role_id;
    }
    public static function emailExist($email)
    {
        return self::selectRecords('user', '*', 'email = ' . $email);
    }

    public function registerUser()
    {
        $data = array(
            'email' => $this->email,
            'name' => $this->fullName,
            'password' => $this->password,
            'VerifyCode' => $this->VerifyCode,
            'role_id' => $this->role_id
        );
        return $this->insertRecord('user', $data);
    }

    public function selectUser($email)
    {
        return $this->selectRecords('user', '*', 'email = ' . $email);
    }
    public function insertToken($token, $email)
    {
        echo $this->selectUser($email)['id'];
        exit;
        return $this->updateRecord('user', ['token' => $token], $this->selectUser($email)['id']);
    }
}
