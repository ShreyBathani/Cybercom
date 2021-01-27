<?php

echo "<h1>Functions with return values</h1><br>";
//function with return values

function add($num1,$num2 ) {
    return $num1 + $num2;
}


function divide($num1,$num2 ) {
    return $num1 / $num2;
}

echo divide(add(5,25),add(4,2)).'<br>';
echo divide(add(15,20),add(2,3)).'<br>';

?>