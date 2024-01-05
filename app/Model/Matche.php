<?php
namespace App\Model;

class Matche extends Crud{

    private int $id;
    public function __construct()
    {
        // Appelle le constructeur de la classe parente (Crud) pour initialiser la connexion à la base de données
        parent::__construct();
    }

    // Sélectionne tous les enregistrements de la table 'matche'
    public function selectAllMatche(){
        return $this->selectRecords('matche');
    }

    // Sélectionne un enregistrement de la table 'matche' en fonction de son ID
    public function selectMatche($id){
        return $this->selectRecords('matche','*','MatchID = '.$id);
    }

    // Ajoute un nouvel enregistrement à la table 'matche'
    public function addMatche(array $data){
        return $this->insertRecord('matche',$data);
    }

    // Supprime un enregistrement de la table 'matche' en fonction de son ID
    public function DeleteMatche(int $id){
        return $this->deleteRecord('matche',$id);
    }
    
    // Met à jour un enregistrement de la table 'matche' en fonction de son ID
    public function UpdateMatche(array $data,int $id){
        return $this->updateRecord('matche',$data,$id);
    }
}