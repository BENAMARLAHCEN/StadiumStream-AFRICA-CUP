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
    // Affiche la liste des matchs
    public function index()
    {
        $matches = new MatchModel;
        $matche = $matches->selectMatch();
        $this->adminView('MatchList', $matche);
    }

    // Affiche le formulaire d'ajout de match
    public function Add()
    {
        // Récupère la liste des équipes et des stades
        $team = new Team;
        $team = $team->selectAllTeam();
        $stadium = new Stadium;
        $stadium = $stadium->selectAllStadium();

        // Affiche la vue d'ajout de match avec les listes d'équipes et de stades
        $this->adminView('AddMatch', ["team" => $team, "stadium" => $stadium]);
    }

    // Affiche le formulaire d'édition d'un match
    public function Edit($id)
    {
        // Récupère la liste des équipes, des stades et les détails du match à éditer
        $teamModel = new Team;
        $teamList = $teamModel->selectAllTeam();

        $stadiumModel = new Stadium;
        $stadiumList = $stadiumModel->selectAllStadium();

        $matchModel = new MatchModel();
        $oldMatch = $matchModel->selectMatch($id);

        // Vérifie si le match existe et affiche le formulaire d'édition
        if ($oldMatch) {
            $this->adminView('EditMatch', ["team" => $teamList, "stadium" => $stadiumList, "oldMatch" => $oldMatch]);
        } else {
            echo "le matche n'existe pas";
        }
    }

    // Ajoute un nouveau match
    public function AddMatch()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $newMatche = new Matche;
            $carbon = new Carbons;
            $date = $_POST["MatchDateTime"];
            $status = true;
            $message = "";
            $deffDAY = $carbon->checkRemainingDays($date);

            // Vérifie si les champs requis sont renseignés
            if (
                empty($_POST["Team1ID"]) || empty($_POST["Team2ID"]) || empty($_POST["stadium_id"])
                || empty($_POST["GroupID"]) || empty($_POST["MatchDateTime"])
            ) {
                // Vérifie si la date est valide (plus de 2 jours à l'avance)
                $message = "please enter all data <br>";
                $status = false;
            } else if ($deffDAY < 2) {

                $message .= "please enter a date above a 3 days <br>";
                $status = false;
            }

            // Si tout est en ordre, ajoute le match
            if ($status) {
                $newMatche->addMatche($_POST);
                $_SESSION['succesMessage'] = "the match addes with succes";

                // Redirige vers la liste des matchs
                header("Location:" . APP_URL . "matche");
                exit;
            } else {

                // En cas d'erreur, redirige vers le formulaire d'ajout avec un message d'erreur
                $_SESSION['errorMessage'] = $message;
                header("Location:" . APP_URL . "matche/Add");
                exit;
            }
        }
    }
    // Supprime un match
    public function DeleteMatch($id)
    {
        $newMatche = new Matche;
        if ($newMatche->DeleteMatche($id)) {
            header('location:../../Matche');
        } else {
            header('location:../errors');
        }
    }

    // Mise à jour un match existant
    public function UpdateMatche()
    {
        $newMatche = new Matche;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id = $_POST['id'];
            unset($_POST['id']);
            $carbon = new Carbons;
            $date = $_POST["MatchDateTime"];
            $status = true;
            $message = "";
            $deffDAY = $carbon->checkRemainingDays($date);

            // Vérifie si les champs requis sont renseignés
            if (
                empty($_POST["Team1ID"]) || empty($_POST["Team2ID"]) || empty($_POST["stadium_id"])
                || empty($_POST["GroupID"]) || empty($_POST["MatchDateTime"])
            ) {

                $message = "please enter all data <br>";
                $status = false;

            } else if ($deffDAY < 2) {

                // Vérifie si la date est valide (plus de 2 jours à l'avance)
                $message .= "please enter a date above a 3 days <br>";
                $status = false;

            }
            // Si tout est en ordre, met à jour le match
            if ($status) {
                if ($newMatche->UpdateMatche($_POST, $id)) {
                    
                    $_SESSION['succesMessage'] = "The match has been updated successfully";
                    
                    // Redirige vers la liste des matchs
                    header('location:../Matche');
                    exit;
                }
            } else {
                
                // En cas d'erreur, redirige vers le formulaire d'édition avec un message d'erreur
                $_SESSION['errorMessage'] = $message;
                header("Location:" . APP_URL . "matche/Edit/".$id);
                exit;
            }
        }
    }

    // Supprime un match (alternative)
    public function deleteMatche()
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
