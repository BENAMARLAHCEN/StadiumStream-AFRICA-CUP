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
        $this->adminView('AddMatch', ["team" => $team, "stadium" => $stadium]);
        session_destroy();
    }

    public function Edit($id)
    {
        $teamModel = new Team;
        $teamList = $teamModel->selectAllTeam();

        $stadiumModel = new Stadium;
        $stadiumList = $stadiumModel->selectAllStadium();

        $matchModel = new MatchModel();
        $oldMatch = $matchModel->selectMatch($id);

        if ($oldMatch) {
            $this->adminView('EditMatch', ["team" => $teamList, "stadium" => $stadiumList, "oldMatch" => $oldMatch]);
        } else {
            echo "invalid";
        }
    }

    public function AddMatch()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $newMatche = new Matche;
            if ($newMatche->addMatche($_POST)) {
                $carbon = new Carbons;
                $date = $_POST["MatchDateTime"];
                $status = true;
                $message = "";
                $deffDAY = $carbon->checkRemainingDays($date);
                session_start();

                if (
                    empty($_POST["Team1ID"]) || empty($_POST["Team2ID"]) || empty($_POST["stadium_id"])
                    || empty($_POST["GroupID"]) || empty($_POST["MatchDateTime"])
                ) {
                    $message = "please enter all data <br>";
                    $status = false;
                } else if ($deffDAY < 2) {


                    $message .= "please enter a date above a 3 days <br>";
                    $status = false;
                }
                if ($status) {
                    $_SESSION['succesMessage'] = "the match addes with succes";
                    header("Location:" . APP_URL . "matche");
                    exit;
                } else {

                    $_SESSION['errorMessage'] = $message;
                    header("Location:" . APP_URL . "matche/Add");
                    exit;
                }
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            unset($_POST['id']);

            if ($newMatche->UpdateMatche($_POST, $id)) {
                session_start();
                $_SESSION['succesMessage'] = "The match has been updated successfully";
                session_destroy();
                header('location:../Matche');
                exit;
            } else {
                header('location:../errors');
                exit;
            }
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
        } else
            $this->index();
    }
}
