<?php

// While looping

/*
$i = 0;

while($i < 5) {
    echo ($i);//01234
    $i++;
} 


*/

/*
$i = 9;

do{

    echo "$i is"." <br>";

}

while($i < 9); // display 9 and it execute the ouside the do ,and run once a time.
*/


// for loop

/*
$i=0;

for($i=0;$i<5;$i++){

    echo($i); // same displays 0 to 4 but less than 5
}
*/


$mycity=array('Delhi','Mumbai');

foreach($mycity as $mycities){

    echo($mycities."<br>"); 
}