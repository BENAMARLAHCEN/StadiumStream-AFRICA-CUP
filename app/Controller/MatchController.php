<?php
  namespace App\Controller;
  use App\Model\MatchModel;
  class MatchController extends Controller {
    function index(){
        
         header("Location:../");
       
    }
    function reserve($id){

        $test=new MatchModel();

        $matches=$test->selectMatch($id);
        
        $this->view('match',$matches);
    }
  }