<?php

//writing to file 
echo '<h1>Writing to File</h1><br>';

$handle = fopen("demo.txt", "w");

fwrite($handle, "Shrey\n");
fwrite($handle, "John\n");

fclose($handle);

?>