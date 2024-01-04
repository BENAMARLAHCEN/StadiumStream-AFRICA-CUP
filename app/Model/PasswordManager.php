<?php 

namespace App\Model;

class PasswordManager
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function updatePassword($id, $password)
    {
        $sql = "UPDATE user SET password = :password WHERE id = :id";
        $params = array(':id' => $id, ':password' => $password);

        try {
            $this->db->execute($sql, $params);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
