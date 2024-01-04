<?php
namespace Core; 
use Carbon\Carbon; 
class Carbons 
{
    public function checkRemainingDays($data)
    {
        $matchDateTime = Carbon::parse($data);
        $currentDateTime = Carbon::now();
        $remainingDays = $currentDateTime->diffInDays($matchDateTime);
    
        if ($matchDateTime->isPast()) {
            $remainingDays *= -1;
        }
    
        return $remainingDays;
    }
}
