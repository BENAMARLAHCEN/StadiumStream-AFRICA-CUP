<?php
  namespace App\Controller;
  use App\Model\MatchModel;
  use core\Carbons;
  class MatchController extends Controller {
    function index(){
        
         header("Location:../");
       
    }
    function reserve($id){

        $test=new MatchModel();
        $time = new Carbons;
        $matches=$test->selectMatch($id);
        if($time->checkRemainingDays($matches[0]->MatchDateTime)<1)
          $status=false;
        else $status = true;
       
        
        $this->view('match',["matches" => $matches , "status"=>$status]);
    }
  }