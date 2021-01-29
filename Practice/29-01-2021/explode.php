<?php

//explode 
echo '<h1>Explode</h1><br>';

$handle = fopen("demo.txt", "r");
$fdata = trim(fread($handle, filesize("demo.txt")));

$name_arr = explode("\n", $fdata);
foreach($name_arr as $name){
    echo $name.", ";
}
?>