<?php
$fnameerr = $lnameerr = $doberr = $gendererr = $countryerr = $emailerr = $phoneerr = $passworderr = $confirmpasserr = $agreeerr = '';

$flag = 0;
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $GLOBALS['flag'] = 1;  //1-true 0-false
    $fname = @input($_POST['fname']);
    $lname = @input($_POST['lname']);
    $day = @input($_POST['day']);
    $month = @input($_POST['month']);
    $year = @input($_POST['year']);
    $gender = @input($_POST['gender']);
    $country = @input($_POST['country']);
    $email = @input($_POST['email']);
    $phone = @input($_POST['phone']);
    $password = @input($_POST['password']);
    $confirmpass = @input($_POST['confirmpass']);
    $agree = @$_POST['agree'];

    if (empty($fname) || !(isset($_POST['fname']))) {
        $fnameerr = 'This field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z\s]+$/',$fname))) {
        $fnameerr = "Only allowed letter and whitespace.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($lname) || !(isset($_POST['lname']))) {
        $lnameerr = 'This field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z\s]+$/',$lname))) {
        $lnameerr = "Only allowed letter and whitespace.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($day) || !(isset($_POST['day'])) || empty($month) || !(isset($_POST['month'])) || empty($year) || !(isset($_POST['year']))) {
        $doberr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($gender) || !(isset($_POST['gender']))) {
        $gendererr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($country) || !(isset($_POST['country']))) {
        $countryerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($email) || !(isset($_POST['email']))) {
        $emailerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailer = "invalid email format.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($phone) || !(isset($_POST['phone']))) {
        $phoneerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    else if (strlen($phone) != 10) {
        $GLOBALS['flag'] = 0;
        $msg = 'Phonenumber must be 10 characters.';
    }
    elseif (!(preg_match('/^\d{10}$/',$phone))) {
        $phoneerr = "Only allowed letter and whitespace.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($password) || !(isset($_POST['password']))) {
        $passworderr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (strlen($password) < 6) {
        $passworderr = 'Password must be at least 6 characters long.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($confirmpass) || !(isset($_POST['confirmpass']))) {
        $confirmpasserr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (strlen($confirmpass) < 6) {
        $passworderr = 'Password must be at least 6 characters long.';
        $GLOBALS['flag'] = 0;
    }

    if ($password != $confirmpass) {
        $confirmpasserr = 'Password doesn\'t match';
        $GLOBALS['flag'] = 0;
    }

    if (empty($agree) || !(isset($_POST['agree']))) {
        $agreeerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    
}


?>