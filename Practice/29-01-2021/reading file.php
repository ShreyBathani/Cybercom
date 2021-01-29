<?php

//reading file 
echo '<h1>Reading File</h1><br>';
echo "Current name in file<br>";
$fread = file("demo.txt");
$cnt = 1;
$fcnt = count($fread);
foreach($fread as $name){
    echo trim($name);
    if($cnt < $fcnt){
        echo ", ";
    }
    $cnt++;
}

?>