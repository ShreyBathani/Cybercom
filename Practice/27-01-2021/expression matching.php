<?php
//expression matching
echo "<h1>expression matching</h1>";
function has_space($str){
    if(preg_match('/ /', $str)){
        echo 'String has space.<br>';
    }
    else{
        echo 'String has no space.<br>';
    }
}
has_space('ihavenospace');
has_space('i have space');
?>