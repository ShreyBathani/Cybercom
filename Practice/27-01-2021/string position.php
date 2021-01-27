<?php

//string position 
echo "<h1>string position</h1>";

$str = 'My name is Shrey. My friend\'s name is Mark.';

function find($str, $find, $offset,$find_len){
    while($str_pos = strpos($str, $find, $offset)){
        echo '<b>'. $find . '</b> found at: '. $str_pos . '<br>';
        $offset = $str_pos + $find_len;
    }
}

$offset = 0;
$find = 'name';
$find_len = strlen($find);
find($str, $find, $offset,$find_len);


?>