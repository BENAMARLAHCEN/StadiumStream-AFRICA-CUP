<?php

namespace App\Controller;
use App\Model\MatchModel;
use App\Model\Stadium;
class HomeController extends Controller
{
    public function index()
    {   

        $match=new MatchModel;
        $match= $match->selectMatch();
        $stadiom = new Stadium();
        $stadiom = $stadiom->selectAllStadium();
        $this->view('home',["match"=>$match]);

    }

    public function match()
    {
        $this->view('match');
    }

}
