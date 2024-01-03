<?php

namespace App\Controller;

use App\Model\Matche;
use App\Model\MatchModel;
use App\Model\Team;
use App\Model\Stadium;
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
    {
        $matches = new Matche;
        $matche = $matches->selectMatche($id);
        $this->adminView('EditStadium', $matche[0]);
    }

    public function AddStadium()
    {
        $newMatche = new Matche;
        
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = __DIR__."\\..\\..\\public\\asset\\uploads\\" . $image;
        unset($_POST['image']);
        $_POST['image'] = $image;
        if (empty($image)) {
            echo "image that you have entered is note exist!";
        } else if ($newStadium->addStadium($_POST)) {

            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                header('location:../Stadium');
            }
            
        } else {
            header('location:Add');
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
