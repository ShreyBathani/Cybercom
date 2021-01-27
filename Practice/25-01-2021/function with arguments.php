<?php


echo "<h1>Functions with arguments</h1><br>";
//function with arguments
//function1
function familyName($fname) {
    echo "My name is $fname.<br>";
}

familyName("Shrey");
familyName("Rudra");


//function2
$num1 = 10;
$num2 = 15;

function add($num1,$num2 ) {
    echo $num1 + $num2 . '<br>';
}
add($num1,$num2);


//function3
function displayDate($date, $day, $year ) {
    echo $date .' '. $day  .' '. $year . '<br>';
}

displayDate('Monday', 25, 2021);


?>