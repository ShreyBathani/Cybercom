<?php

//for loop
echo "<h1>for loop</h1><br>";
for ($x = 100; $x >= 0; $x-=10) {
    echo "Value  of x: $x <br>";
}

echo "<br><br>";

$num1 = 0; 
$num2 = 1; 
echo "<h1>Fibonacci series</h1>";
for ($counter=0 ; $counter<=10 ; $counter++){ 
    echo "$num1<br>"; 
    $num3 = $num2 + $num1; 
    $num1 = $num2; 
    $num2 = $num3; 
}

?>