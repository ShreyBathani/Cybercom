<?php

$validstatus = 0;
$nameerr = $emailerr = $phoneerr = $titleerr = "";
date_default_timezone_set("Asia/Calcutta");
$created = date("Y-m-d");
$created .="T";
$created .= date("H:i:s");

if(isset($_POST['submit'])){

    $GLOBALS['validstatus'] = 1;
    $name = @input($_POST['name']);
    $email = @input($_POST['email']);
    $phone = @input($_POST['phone']);
    $title = @input($_POST['title']);
    $id = @$_POST['id'];
    
    $nameerr = $emailerr = $phoneerr = $titleerr = "";


    if (empty($name) || !(isset($_POST['name']))) {
        $nameerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z0-9 ]+$/',$name))) {
        $nameerr = "invalid.";
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($email) || !(isset($_POST['email']))) {
        $emailerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerr = "invalid.";
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($phone) || !(isset($_POST['phone']))) {
        $phoneerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }
    else if (strlen($phone) != 10) {
        $phoneerr = 'must be 10 digit.';
        $GLOBALS['validstatus'] = 0;
    }
    elseif (!(preg_match('/^\d{10}$/',$phone))) {
        $phoneerr = 'invalid.';
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($title) || !(isset($_POST['title']))) {
        $titleerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }

}

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

?>