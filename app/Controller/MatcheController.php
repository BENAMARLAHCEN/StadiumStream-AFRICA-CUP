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
        $matche = new Stadium;
        $matche = $matche->selectAllStadium();
        $oldMatch=new MatchModel();
        $oldMatch=$oldMatch->selectMatch($id);
        $this->adminView('EditMatch', ["team"=>$team,"stadium"=> $matche,"oldMatch"=>$oldMatch]);
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
        $newMatche = new Matche;
        if ($newMatche->DeleteMatche($id)) {
            header('location:../../Matche');
        } else {
            header('location:../errors');
        }
    }
    public function UpdateMatche()
    {
        $newMatche = new Matche;
        $id = $_POST['id'];
        unset($_POST['id']);
        if ($newMatche->UpdateMatche($_POST, $id)) {
            header('location:../Matche');
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
