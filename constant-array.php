<?php
// constant

//define('SUBJECT','Lupe coding academy is a coding platform company');

//echo(SUBJECT."<br>");

/*$mytitle="luepe is a best coding academy";
$mytext=explode(" ",$mytitle);

echo($mytext[0]);
*/

/**
 * 
 * 
 *  be sure dont use "" double quotes in array and always use single quote else you will get
 * undefined constant array.
 */
// 

////$luepe=array('coding','academy');

//echo(sizeof($luepe));
//echo($luepe[0]." ".$luepe[1]);


// use in_array

//if(in_array("academy",$luepe)){
   // echo("i got the string academy");
//}



//$luepe=array('coding' =>'PHP, Laravel', 'academy'=>'Best in delhi');
//echo($luepe['coding']." ".$luepe['academy']);


// impode and explode function
/*
$myTitle="Luepe is a best coding academy in youtube and delhi";
$myarr=explode(" ",$myTitle);

echo($myarr[0].$myarr[1]);
*/

/*
$myTitle=array("Luepe is a best coding","academy in youtube and delhi");
echo(implode(",",$myTitle));
*/

// sort an array
/*
$myProg=array("PHP","Node","React");
ksort($myProg);
foreach($myProg as $myprogs => $val){
echo("myProg[".$myprogs."]=".$val."<br>");
}
*/


$myProg=array(
    "a"=>"PHP",
    "b"=>"Node",
    "c"=>"React"
);
krsort($myProg);
foreach($myProg as $myprogs => $val){
    echo("myProg[".$myprogs."]=".$val."<br>");
}


?>