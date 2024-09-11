<?php

$todaysDate =  date('M-d-Y h:i');
date_default_timezone_set("America/Chicago");
function todaysDate(){
    global $todaysDate;
    echo("Todays Date is ". $todaysDate );
}



function calculateFutureDate($daysToAdd=0)
{
    global $todaysDate;
    //retumrs unix date after runnimg this line
    //strtotime($todaysDate . "+ $daysToAdd days") computer needs to figure out 
    //creates format here date("Y-m-d: D",
    $futureDate = date("Y-m-d: D", strtotime($todaysDate . "+ $daysToAdd days"));
    return($futureDate);
}

// todaysDate();
// calculateFutureDate(5);


?>