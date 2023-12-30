<?php
  namespace App\Controller;
  use App\Model\MatchModel;
  class MatchController extends Controller {
    function index(){
         
       
    }
    function test($id){
        
        $test=new MatchModel();
       
        $matches=$test->selectMatch($id);
        // var_dump($matches);
       $this->view('match',$matches);
    }
  }