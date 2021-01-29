<?php

session_start();
$_SESSION["username"] = "shrey";
$_SESSION["password"] = "1234";

setcookie('name', 'shrey', time()+1800)    //expire after half hour
?>