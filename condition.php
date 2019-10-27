<?php
/**
 * 
 * condition
 */
/*
$mycity=array(
    
        'North'=>'Delhi',
        'South'=>'Kochi'
);

*/
// there will be only one condition will be true
/*
if($mycity['North']=="Delhsjsjjsjsi"){

    echo("North india is correct");
}
elseif ($mycity['South']=="Kochjsjsjsi"){

    echo("South india is correct");


}
else{
    echo("No match with the given array.");
}



if($mycity['North']=="Delhsi"):

    echo("North india is correct");

elseif ($mycity['South']=="Kocshi"):

    echo("South india is correct");



else:
    echo("No match with the given array.");
endif;
*/





$mycity="Kochi";

switch ($mycity) {

    case 'Delhi' : 

    echo("North indian city.");

    break;

    case 'Kochi' : // met as true

    echo("South indian city.");

    break;

    default:

    echo("Not matching");




}