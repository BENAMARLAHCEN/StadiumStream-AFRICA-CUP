<?php
namespace App\Model;

class Stadium extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllStadium(){
        return $this->selectRecords('stadium');
    }
    public function selectStadium($id){
        return $this->selectRecords('stadium','*','id = '.$id);
    }
    public function addStadium(array $data){
        return $this->insertRecord('stadium',$data);
    }
    public function DeleteStadium(int $id){
        return $this->deleteRecord('stadium',$id);
    }
    public function UpdateStadium(array $data,int $id){
        return $this->updateRecord('stadium',$data,$id);
    }
}