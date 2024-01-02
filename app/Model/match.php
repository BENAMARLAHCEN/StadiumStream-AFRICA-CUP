<?php
namespace App\Model;

require '../../vendor/autoload.php';
use App\Model\Connection;
use Exception;
use PDO;
use Carbon\Carbon;

class matche {
    private PDO $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->pdo;
    }

    public function createMatch($data){
        
        try{
            $MatchDateTime = carbon::prase($data['MatchDateTime']);
        $NowDateTime = carbon::now();
        $DiffDateTime = $NowDateTime->diffInDays($MatchDateTime);
        
        if($DiffDateTime!==2){
            throw new Exception("The match must have exactly two days remaining.");
        }

        $query = "INSERT INTO matche (Team1ID, Team2ID, MatchDateTime, Result, GroupID, stadium_id) VALUES (:team1Id, :team2Id, :matchDateTime, :result, :groupId, :stadiumId)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);

        return $this->db->lastInsertId();

        }catch(Exception $exception){
            throw new Exception("Failed to create match. ".$exception->getMessage());
        }
    }

    public function updateMatch($matchId, $data){
        try{
            $query = "UPDATE matche SET Team1ID = :team1Id, Team2ID = :team2Id, MatchDateTime = :matchDateTime, Result = :result, GroupID = :groupId, stadium_id = :stadiumId WHERE MatchID = :matchId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':matchId', $matchId, PDO::PARAM_INT);
            $stmt->execute($data);
        }catch(Exception $exception){
            throw new Exception("Failed to update match. ".$exception->getMessage());
        }

    }

    public function deleteMatch($matchId){
        try{
            $query = "DELETE FROM matche WHERE matchId = :matchId ";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":matchId", $matchId, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt->rowCount() == 0){
                throw new Exception("Match not found with ID: $matchId");
            }
        }catch(Exception $exception){
            throw new Exception("Failed to delete match. ".$exception->getMessage());
        }

    }


}

