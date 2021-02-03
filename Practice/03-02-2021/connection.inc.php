<?php

$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'test';
$connect_err = "Couldn't connect!!";

$conn = @mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die($connect_err);
}
/* else{
    echo 'Connected';
} */
?>