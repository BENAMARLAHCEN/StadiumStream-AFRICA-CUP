<?php 

namespace App\Model;

class ImageManager
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function updateImage($id, $image)
    {
        $sql = "UPDATE user SET image = :image WHERE id = :id";
        $params = array(':id' => $id, ':image' => $image);

        try {
            $this->db->execute($sql, $params);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

