<?php
namespace App\Model;

class Matche extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllMatche(){
        return $this->selectRecords('matche');
    }
    public function selectMatche($id){
        return $this->selectRecords('matche','*','MatchID = '.$id);
    }
    public function addMatche(array $data){
        return $this->insertRecord('matche',$data);
    }
    public function DeleteMatche(int $id){
        return $this->deleteRecord('matche',$id);
    }
    public function UpdateMatche(array $data,int $id){
        return $this->updateRecord('matche',$data,$id);
    }
}