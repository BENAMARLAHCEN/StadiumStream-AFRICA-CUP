<?php

namespace App\Controller;

use App\Model\Matche;
use App\Model\MatchModel;
use App\Model\Team;
use App\Model\Stadium;
use core\Carbons;
use Exception;
class MatcheController extends Controller
{
    public function index()
    {
        $matches = new MatchModel;
        $matche = $matches->selectMatch();
        $this->adminView('MatchList', $matche);
    }
    public function Add()
    {    
        session_start();
        $team = new Team;
        $team = $team->selectAllTeam();
        $stadium = new Stadium;
        $stadium = $stadium->selectAllStadium();
        $this->adminView('AddMatch',["team"=>$team,"stadium"=> $stadium]);
        session_destroy();
    }
    
    public function Edit($id)
    {   $team = new Team;
        $team = $team->selectAllTeam();
        $stadium = new Stadium;
        $stadium = $stadium->selectAllStadium();
        $oldMatch=new MatchModel();
        $oldMatch=$oldMatch->selectMatch($id);
        $this->adminView('EditStadium', ["team"=>$team,"stadium"=> $stadium,"oldMatch"=>$oldMatch]);
    }

 

    public function DeleteMatch($id)
    {
        $newStadium = new Matche;
        if ($newStadium->DeleteMatche($id)) {
            header('location:../../Matche');
        } else {
            header('location:../errors');
        }
    }
    public function UpdateStadium()
    {
        $newStadium = new Matche;
        $id = $_POST['id'];
        unset($_POST['id']);
        if ($newStadium->UpdateMatche($_POST, $id)) {
            header('location:../Stadium');
        } else {
            header('location:errors');
        }
    }

    public function deletMatche()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $delete = new Matche;
            if ($delete->DeleteMatche($id) === false) {
            } else {
                $this->index();
            }
        } else $this->index();
    }
}