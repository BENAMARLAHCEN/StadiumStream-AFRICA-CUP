<?php

namespace App\Model;

class ProfileManager
{
    private $db;

    public function __construct()
    {
        $db = new Connection();
        $this->db = $db->pdo;
    }

    public function getUserInfo($id)
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $params = [':id' => $id];


    }
    public function updateProfile($id, $username, $email)
    {
        $sql = "UPDATE user SET name = :name, email = :email WHERE id = :id";
        $params = array(':id' => $id, ':name' => $username, ':email' => $email);

        try {
            $this->db->execute($sql, $params);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
