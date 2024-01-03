<?php
namespace Core; 
use Carbon\Carbon; 
use Exception;
class Carbons 
{
    public function checkRemainingDays($data)
    {
        $matchDateTime = Carbon::parse($data['MatchDateTime']);
        $currentDateTime = Carbon::now();
        $remainingDays = $currentDateTime->diffInDays($matchDateTime);

        if ($remainingDays !== 2) {
            throw new Exception("The match must have exactly two days remaining.");
        }
    }
}