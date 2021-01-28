<?php

//header()
$redirect_page = 'https://google.com';
$redirect = true;
if($redirect){
    header('Location: '.$redirect_page);
}
//header('Location: '.$_SERVER['HTTP_HOST'].'/Training/Coding/27-01-2021/head.php');

?>