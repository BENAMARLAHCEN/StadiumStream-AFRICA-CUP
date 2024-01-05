<?php 
use App\Controller\Controller;
use App\Model\Filter;
use App\Model\MatchController;
use App\Model\MatchModel;
     class FilterController extends Controller {
            private $modelFilter = new Filter();
            private $match = new  MatchModel();
            function filterByTime(){
              
            if(isset($_POST["Datelimit"]))
            {
               $time =  explode("/",$_POST["Datelimit"]);
               $match  = $this->modelFilter->ByTime($time[0],$time[1]);
               $this->view("search",$match);
            }
           }
           

           function filterByTeam(){
              
            if(isset($_POST["search"]))
            {
            $team =  $_POST["search"];
               $match = $this->modelFilter->ByTeam($team);
               $this->view("search",$match);
            }
           }
           function filterByStaduim(){
              
            if(isset($_POST["search"]))
            {
            $team =  $_POST["search"];
               $match = $this->modelFilter->ByStaduim($team);
               $this->view("search",$match);
            }
           } 


     }