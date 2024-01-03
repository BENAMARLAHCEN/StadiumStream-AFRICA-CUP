<?php

namespace App\Controller;

use App\Model\Matche;
use App\Model\MatchModel;
use App\Model\Team;
use App\Model\Stadium;
use core\Carbons;
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
        $team = new Team;
        $team = $team->selectAllTeam();
        $stadium = new Stadium;
        $stadium = $stadium->selectAllStadium();
        $this->adminView('AddMatch',["team"=>$team,"stadium"=> $stadium]);
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

    public function AddMatch()
    {   
       
         if($_SERVER["REQUEST_METHOD"]=="POST"){

           
        $newMatche = new Matche;
        if($newMatche->addMatche($_POST)) {
              $carbon =  new Carbons;
              $date = $_POST["MatchDateTime"];

             $deffDAY= $carbon->checkRemainingDays($date);
            
             if($deffDAY<2) {
                session_start();
                $_SESSION['errorMessage'] = "please enter a date above a 3 days";
                
            header("Location:../matche/Add");
            exit;
             }

            header("Location:../matche");
            exit;
        }
     }
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
