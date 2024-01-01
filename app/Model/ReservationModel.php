<?php
namespace App\Model;

use PDO;
use PDOException;

class ReservationModel extends Connection
{
    public function __construct()
    {
        parent::connect();
    }
    function addReservation($data)
    {

        try {
            $sql = "INSERT INTO reservation( id_user, ticket_count) VALUES (:id_user,:ticket_count)";
            $data['id_user'] += 0;
            $data['ticket_count'] += 0;
          
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_user', $data['id_user'], PDO::PARAM_INT);
            $stmt->bindParam(':ticket_count', $data['ticket_count'], PDO::PARAM_INT);
            if ($stmt->execute()) {
                $res = $this->pdo->query("SELECT id FROM reservation ORDER BY id DESC LIMIT 1");
                $id_reservation = $res->fetch(PDO::FETCH_OBJ)->id;
                $status= true;
                $ticket = new TicketModel();
                for ($i = 0; $i < $data['ticket_count']; $i++) {

                   if ($ticket->addTicket($data['id_match'], $id_reservation) ){

                   } else $status =false;
                }
                if($status) echo "its work";
                else echo "somthing is wrong";
            } else
                return false;
        } catch (PDOException $e) {
            echo "failed" . $e->getMessage();
        }
    }
}