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
                if($status) return $id_reservation;
                else return false;
            } else
                return false;
        } catch (PDOException $e) {
            echo "failed" . $e->getMessage();
        }
    }

    function getTiket($reservId){
           
        $sql = "SELECT
            A.TeamName AS teamA,
            A.logo AS logoA,
            B.logo AS logoB,
            B.TeamName AS teamB,
            MatchDateTime,
            r.id as id,
            GroupID,
            user.email,
            user.name,
            s.name AS stadium_name,
            s.city,
            s.address
        FROM
            reservation AS r
            INNER JOIN
            ticket ON ticket.id_reservation = r.id 
        INNER JOIN
            matche AS m ON ticket.matchID = m.id
        INNER JOIN
            user ON user.id = r.id_user
        INNER JOIN
            stadium AS s ON s.id = m.stadium_id
        
        INNER JOIN
            team AS A ON A.id = m.Team1ID
        INNER JOIN
            team AS B ON B.id = m.Team2ID
        WHERE
            r.id = :id";
        $reservId += 0;
       
      
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $reservId, PDO::PARAM_INT);
        $stmt->execute();
        $tickets = $stmt->fetchAll( PDO::FETCH_ASSOC);
        return $tickets;
    }

    function ticketRest($id_match){
        $id_match+=0;
        $sql = "SELECT (SELECT capacity FROM stadium INNER join matche ON stadium.id=matche.stadium_id WHERE matche.id = 2) 
        -COUNT(*) as ticketRest FROM ticket WHERE matchID = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id_match, PDO::PARAM_INT);
        $stmt->execute();
        $reset = $stmt->fetch(PDO::FETCH_OBJ)->ticketRest;
        return $reset;
    }
    
   
}