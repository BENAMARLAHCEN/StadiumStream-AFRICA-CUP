<?php

namespace App\Controller;

use App\Model\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = new Team;
        $team = $teams->selectAllTeam();
        $this->adminView('TeamList', $team);
    }
    public function Add()
    {
        $this->adminView('AddTeam');
    }
    public function Edit($id)
    {
        $teams = new Team;
        $team = $teams->selectTeam($id);    
        $this->adminView('EditTeam', $team[0]);
    }

    public function AddTeam()
    {
        $newTeam = new Team;
        
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = __DIR__."\\..\\..\\public\\asset\\img\\imageTeam\\" . $image;
        unset($_POST['image']);
        $_POST['image'] = $image;
        if (empty($image)) {
            echo "image that you have entered is note exist!";
        } else if ($newTeam->addTeam($_POST)) {
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                header('location:../Team');
            }
            
        } else {
            header('location:Add');
        }
    }

    public function DeleteTeam($id)
    {
        $newTeam = new Team;
        if ($newTeam->DeleteTeam($id)) {
            header('location:../../Team');
        } else {
            header('location:../errors');
        }
    }
    // public function UpdateTeam()
    // {
    //     $newTeam = new Team;
    //     $id = $_POST['id'];
    //     unset($_POST['id']);
    //     if ($newTeam->UpdateTeam($_POST, $id)) {
    //         header('location:../Team');
    //     } else {
    //         header('location:errors');
    //     }
    // }

    public function UpdateTeam()
    {
        $newTeam = new Team;
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = __DIR__."\\..\\..\\public\\asset\\img\\imageTeam\\" . $image;
        unset($_POST['image']);
       
        
        if (!empty($image)) {
            $_POST['image'] = $image;
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
            }
        }
        $id = $_POST['id'];
        unset($_POST['id']);
        if ($newTeam->UpdateTeam($_POST, $id)) {
            header('location:../Team');
        } else {
            header('location:errors');
        }
    }

}
