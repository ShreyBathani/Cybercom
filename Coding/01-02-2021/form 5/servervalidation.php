<?php
$emailerr = $passworderr= '';

$flag = 0;
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $GLOBALS['flag'] = 1;  //1-true 0-false
    $email = @input($_POST['email']);
    $password = @input($_POST['password']);


    if (empty($email) || !(isset($_POST['email']))) {
        $emailerr = 'This field is required.';
        $GLOBALS['flag'] = 0;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerr = "invalid email format.";
        $GLOBALS['flag'] = 0;
    }


    if (empty($password) || !(isset($_POST['password']))) {
        $passworderr = 'This field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (strlen($password) < 6) {
        $passworderr = 'At least 6 characters long.';
        $GLOBALS['flag'] = 0;
    }
    
}


?>