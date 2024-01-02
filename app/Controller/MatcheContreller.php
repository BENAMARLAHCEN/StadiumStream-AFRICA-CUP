<?php

namespace App\Controller;

use App\Model\Matche;

class StadiumController extends Controller
{
    public function index()
    {
        $matches = new Matche;
        $matche = $matches->selectAllStadium();
        $this->adminView('MatchList', $matche);
    }
    public function Add()
    {

        $this->adminView('AddMatch');
    }
    
    public function Edit($id)
    {
        $stadiums = new Matche;
        $stadium = $stadiums->selectStadium($id);
        $this->adminView('EditStadium', $stadium[0]);
    }

    public function AddStadium()
    {
        $newStadium = new Stadium;
        
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
