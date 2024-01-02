<?php

namespace App\Controller;
use App\Model\MatchModel;
class HomeController extends Controller
{
    public function index()
    {   

        $match=new MatchModel;
        $match= $match->selectMatch();
       
        $this->view('home',["match"=>$match]);

    }

    public function match()
    {
        $this->view('match');
    }

}
