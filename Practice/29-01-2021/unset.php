<?php

session_start();
session_destroy();
//unset($_SESSION['username']);
//unset($_SESSION['password']);

setcookie('name', 'shrey', time()-1800)

?>