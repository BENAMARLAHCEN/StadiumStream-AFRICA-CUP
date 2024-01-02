<?php
namespace App\Model;

class Stadium extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllStadium(){
        return $this->selectRecords('stadiums');
    }
    public function selectStadium($id){
        return $this->selectRecords('stadiums','*','id = '.$id);
    }
    public function addStadium(array $data){
        return $this->insertRecord('stadiums',$data);
    }
    public function DeleteStadium(int $id){
        return $this->deleteRecord('stadiums',$id);
    }
    public function UpdateStadium(array $data,int $id){
        return $this->updateRecord('stadiums',$data,$id);
    }
}