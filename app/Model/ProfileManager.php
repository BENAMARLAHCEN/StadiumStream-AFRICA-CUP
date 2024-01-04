<?php

namespace App\Model;
use PDO;
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
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC);
        return $result;

    }
    public function updateProfile($id, $username, $email)
    {
        $sql = "UPDATE user SET name = :name, email = :email WHERE id = :id";
        $params = array(':id' => $id, ':name' => $username, ':email' => $email);
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
        
        
    }
}
