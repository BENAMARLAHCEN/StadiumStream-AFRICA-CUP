<?php
namespace App\Model;
use PDO;
use PDOException;

class MatchModel extends Connection
{
    public function __construct()
    {
        parent::connect();
    }
    function selectMatch($id = null)
    {  
        if ($id != null) {
            $where = "id = :id";
            $id += 0;
        } else {
            $where = "1";
        }
    try{
        $sql = "SELECT matche.id as id , A.TeamName AS teamA , A.logo AS logoA , B.logo AS logoB,  B.TeamName AS teamB, MatchDateTime , Result, GroupID , stadium.name AS stadiomName ,stadium.city 
                  FROM matche INNER JOIN team A INNER JOIN team B INNER JOIN stadium ON A.id = matche.Team1ID AND  B.id = matche.Team2ID 
                  AND stadium.id=matche.stadium_id
                 WHERE {$where}
                  ORDER BY matche.MatchDateTime ASC ;";
    
        $stmt = $this->pdo->prepare($sql);
        if ($id != null) {
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        }
        
        $result = $stmt->execute();
       
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo "faild" . $e->getMessage();
    }
    }

    function   delete($id){
        try{
        $id+=0;
        $sql = "DELETE FROM matche WHERE id:id ;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $res = $stmt->execute();
        if($res) return true;
        else return false;}
        catch (  PDOException $e){
            echo "faild" . $e->getMessage();
        }
    }

    
}