<?php

// $global
/*
function myName() {
    $GLOBALS['z'] = "saju";

  

}

myname();

echo($z); // declare a variable
*/

//echo ($_SERVER['SERVER_PROTOCOL']); 

/*
setcookie('mycookie','Luepe coding', time() + (86400 * 30), "/");

echo($_COOKIE['mycookie']);
*/


//echo($_REQUEST['txtname']);

/**
 * 
 * here i am creating one session
 */

 session_start();

 $_SESSION['myname']="Saju coder from luepe coding academy";

 echo($_SESSION['myname']);

?>

