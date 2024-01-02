<?php

namespace App\Controller;

use App\Model\Stadium;

class StadiumController extends Controller
{
    public function index()
    {
        $stadiums = new Stadium;
        $stadium = $stadiums->selectAllStadium();
        $this->adminView('StadiumList', $stadium);
    }
    public function Add()
    {

        $this->adminView('AddStadium');
    }
    
    public function Edit($id)
    {
        $stadiums = new Stadium;
        $stadium = $stadiums->selectStadium($id);
        $this->adminView('EditStadium', $stadium[0]);
    }

    public function AddStadium()
    {
        // $newStadium = new Stadium;
        
        // $logo = $_FILES['logo']['name'];
        // $logo_tmp_name = $_FILES['logo']['tmp_name'];
        // $logo_folder = __DIR__."\\..\\..\\public\\asset\\uploads\\" . $logo;
        // unset($_POST['logo']);
        // $_POST['logo'] = $logo;
        // if (empty($logo)) {
        //     echo "image that you have entered is note exist!";
        // } else if ($newTeam->addTeam($_POST)) {

        //     if (move_uploaded_file($logo_tmp_name, $logo_folder)) {
        //         header('location:../Team');
        //     }
            
        // } else {
        //     header('location:Add');
        // }
    }

    public function DeleteStadium($id)
    {
        $newStadium = new Stadium;
        if ($newStadium->DeleteStadium($id)) {
            header('location:../../Stadium');
        } else {
            header('location:../errors');
        }
    }
    public function UpdateStadium()
    {
        $newStadium = new Stadium;
        $id = $_POST['id'];
        unset($_POST['id']);
        if ($newStadium->UpdateStadium($_POST, $id)) {
            header('location:../Stadium');
        } else {
            header('location:errors');
        }
    }

    public function deletStadium()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $delete = new Stadium;
            if ($delete->DeleteStadium($id) === false) {
            } else {
                $this->index();
            }
        } else $this->index();
    }
}
