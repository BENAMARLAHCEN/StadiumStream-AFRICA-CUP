<?php
namespace App\Model;

class Team extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllTeam(){
        return $this->selectRecords('team');
    }
    public function selectTeam($id){
        return $this->selectRecords('team','*','id = '.$id);
    }
    public function addTeam(array $data){
        return $this->insertRecord('team',$data);
    }
    public function DeleteTeam(int $id){
        return $this->deleteRecord('team',$id);
    }
    public function UpdateTeam(array $data,int $id){
        return $this->updateRecord('team',$data,$id);
    }
}
