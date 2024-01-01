<?php
namespace App\Model;

use PDO;
use PDOException;

class TicketModel extends Connection
{
    public function __construct()
    {
        parent::connect();
    }
    function addTicket( int $id_match,int $id_reservation)
    {
        try {
            $id_match += 0; 
            $sql = "INSERT INTO ticket( STATUS, id_reservation, matchID) VALUES ('valide',:id_reservation,:matchID)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
            $stmt->bindParam(':matchID', $id_match, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "failed" . $e->getMessage();
        }


    }

}