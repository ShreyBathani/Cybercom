<?php

$x = 25;
$y = 35;
$z = "25";

echo "<h1>Comparison operator</h1><br>";
echo (($x == $z) ? 'true' : 'false'). '<br>'; 
echo (($x === $z) ? 'true' : 'false'). '<br>'; 
echo (($x != $y) ? 'true' : 'false'). '<br>'; 
echo (($x !== $z) ? 'true' : 'false'). '<br>';
echo (($x < $y) ? 'true' : 'false'). '<br>';  
echo (($x > $y) ? 'true' : 'false'). '<br>';   
echo (($x <= $y) ? 'true' : 'false'). '<br>'; 
echo (($x >= $y) ? 'true' : 'false'). '<br>';  


?>