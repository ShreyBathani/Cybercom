<?php

echo "<h1>Function with Global variable</h1><br>";

$my_ip = $_SERVER['REMOTE_ADDR'];
//echo $my_ip;    //::1 is the IPv6 equivalent of 127.0.0.1

function echo_ip(){
    global $my_ip;
    echo 'My IP is: '.$my_ip;
}

echo_ip();
?>