<?php 
namespace App\Controller;
use App\Model\Filter;
use App\Model\MatchController;
use App\Model\MatchModel;
     class FilterController extends Controller {
            private $modelFilter ;
            function __construct()
            {
               $this->modelFilter = new Filter(); 
            }

            function filterByTime(){
              
            if(isset($_POST["Datelimit"]))
            {
               $time =  explode("/",$_POST["Datelimit"]);
               $match  = $this->modelFilter->ByTime($time[0],$time[1]);
               require '../app/View/search.php';
            }
           }
           

           function filterByTeam(){
              
            if(isset($_POST["search"]))
            {
            $team =  $_POST["search"];
               $match = $this->modelFilter->ByTeam($team);
             
               require '../app/View/search.php';
            }
           }
           function filterByStaduim(){
              
            if(isset($_POST["search"]))
            {
            $team =  $_POST["search"];
               $match = $this->modelFilter->ByStaduim($team);
               require '../app/View/search.php';
            }
           } 


     }