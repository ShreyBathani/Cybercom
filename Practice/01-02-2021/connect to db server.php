<?php

$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'test';
$connect_err = "Couldn't connect!!";

$conn = @mysqli_connect($host, $user, $pass);

if(!$conn || !@mysqli_select_db($conn, $db)){
    die($connect_err);
}
/* else{
    echo 'Connected';
} */
?>