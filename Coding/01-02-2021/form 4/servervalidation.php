<?php
$nameerr = $emailerr = $subjecterr = $messageerr  = "";
$name = $email = $subject = $message  = "";
$flag = 0;
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $GLOBALS['flag'] = 1;  //1-true 0-false
    $name = @input($_POST['name']);
    $email = @input($_POST['email']);
    $subject = @input($_POST['subject']);
    $message = @input($_POST['message']);


    if (empty($name) || !(isset($_POST['name']))) {
        $nameerr = '*This field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z\s]+$/',$name))) {
        $nameerr = "*Only allowed letter and whitespace.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($email) || !(isset($_POST['email']))) {
        $emailerr = '*This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerr = "*Invalid email format.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($subject) || !(isset($_POST['subject']))) {
        $subjecterr = '*This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($message) || !(isset($_POST['message']))) {
        $messageerr = '*This Field is required.';
        $GLOBALS['flag'] = 0;
    }
}


?>