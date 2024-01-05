<?php

namespace App\Model;

use PDO;
use PDOException;

class Filter extends Connection
{
    function __construct()
    {
        parent::__construct();
    }
    function ByTime($star, $en)
    {
        try {
            $sql = "SELECT matche.id as id , A.id as Team1ID , B.id as Team2ID   , A.TeamName AS teamA , A.logo AS logoA , B.logo AS logoB,  B.TeamName AS teamB, MatchDateTime , Result, GroupID , stadium.name AS stadiomName , stadium.id as stadiumID ,stadium.city 
                FROM matche INNER JOIN team A INNER JOIN team B INNER JOIN stadium ON A.id = matche.Team1ID AND  B.id = matche.Team2ID 
                AND stadium.id=matche.stadium_id
                         WHERE  MatchDateTime BETWEEN :star AND :en
                          ORDER BY matche.MatchDateTime ASC ;";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(":star", $star, PDO::PARAM_STR);
            $stmt->bindParam(":en", $en, PDO::PARAM_STR);


            $result = $stmt->execute();


            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "faild" . $e->getMessage();
        }
    }
    function ByTeam($teamName)
    {

        try {
            $sql = "SELECT matche.id as id , A.id as Team1ID , B.id as Team2ID   , A.TeamName AS teamA , A.logo AS logoA , B.logo AS logoB,  B.TeamName AS teamB, MatchDateTime , Result, GroupID , stadium.name AS stadiomName , stadium.id as stadiumID ,stadium.city 
                FROM matche INNER JOIN team A INNER JOIN team B INNER JOIN stadium ON A.id = matche.Team1ID AND  B.id = matche.Team2ID 
                AND stadium.id=matche.stadium_id
                         WHERE   A.TeamName LIKE '%$teamName%' or B.TeamName LIKE '%$teamName%'
                          ORDER BY matche.MatchDateTime ASC ;";

            $stmt = $this->pdo->prepare($sql);

            // $stmt->bindParam(":teamName", $teamName, PDO::PARAM_STR);


            $result = $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo "faild" . $e->getMessage();
        }
    }

function ByStaduim($stadiumName)
{


    try {
        $sql = "SELECT matche.id as id , A.id as Team1ID , B.id as Team2ID   , A.TeamName AS teamA , A.logo AS logoA , B.logo AS logoB,  B.TeamName AS teamB, MatchDateTime , Result, GroupID , stadium.name AS stadiomName , stadium.id as stadiumID ,stadium.city 
                FROM matche INNER JOIN team A INNER JOIN team B INNER JOIN stadium ON A.id = matche.Team1ID AND  B.id = matche.Team2ID 
                AND stadium.id=matche.stadium_id
                         WHERE   stadium.name LIKE '%$stadiumName%'
                          ORDER BY matche.MatchDateTime ASC ;";

        $stmt = $this->pdo->prepare($sql);

        // $stmt->bindParam(":nameStaduim", $stadiumName, PDO::PARAM_STR);


        $result = $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "faild" . $e->getMessage();
    }
}
}