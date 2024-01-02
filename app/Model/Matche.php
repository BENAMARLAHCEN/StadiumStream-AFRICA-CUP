<?php
namespace App\Model;

class Matche extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllStadium(){
        return $this->selectRecords('matche');
    }
    public function selectStadium($id){
        return $this->selectRecords('matche','*','MatchID = '.$id);
    }
    public function addStadium(array $data){
        return $this->insertRecord('matche',$data);
    }
    public function DeleteStadium(int $id){
        return $this->deleteRecord('matche',$id);
    }
    public function UpdateStadium(array $data,int $id){
        return $this->updateRecord('matche',$data,$id);
    }
}