<?php

namespace App\Controller;
use App\Model\MatchModel;
use App\Model\Stadium;
use App\Model\Team;
class HomeController extends Controller
{
    public function index()
    {   

        $match=new MatchModel;
        $match= $match->selectMatch();
        $stadium = new Stadium();
        $stadium = $stadium->selectAllStadium();
        $teams = new Team();
        $team = $teams->selectAllTeam();
       
        $this->view('home',["matche"=>$match , "stadium" =>$stadium , "team" => $team]);

    }

    public function match()
    {
        $this->view('match');
    }

}
