<?php

//opendir()
echo '<h1>opendir()</h1><br>';

$dir = "29-01-2021";

if($handel = opendir('../'.$dir.'/')){
    echo "Inside $dir Directory<br>";
    while($file = readdir($handel)){
        echo '<a href="../'.$dir.'/'.$file.'">'. $file.'</a><br>';
        //echo $file."<br>";
    }
}
?>