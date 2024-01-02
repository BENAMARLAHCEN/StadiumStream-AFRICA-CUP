<?php
namespace App\Controller;

use App\Model\matche;
use Exception;

class MatchController
{

    private $matchModel;

    public function __construct()
    {
        $this->matchModel = new matche();
    }

    public function createMatch($data)
    {
        try {
            $matchId = $this->matchModel->createMatch($data);
            header("Location: ");
            exit();
        }catch(Exception $exception){
            header("Location: ?message=" . urlencode($exception->getMessage()));
        }
    }
    public function updateMatch($matchId, $data)
    {
        try {
            $this->matchModel->updateMatch($matchId, $data);
            header("Location: ");
            exit();
        }catch(Exception $exception){
            header("Location: ?message=" . urlencode($exception->getMessage()));
        }
    }

    public function deleteMatch($matchId)
    {
        try {
            $this->matchModel->deleteMatch($matchId);
            header("Location: ");
            exit();
        }catch(Exception $exception){
            header("Location: ?message=" . urlencode($exception->getMessage()));
        }
    }
}