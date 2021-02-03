<?php
$fnameerr = $passworderr = $gendererr = $addresserr = $doberr = $gameerr = $marriederr = $agreeerr = '';
$fname = $password =  $gender = $address = $dob = $married = $agree = "";
$game = array();
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
    $password = @input($_POST['password']);
    $gender = @input($_POST['gender']);
    $address = @input($_POST['address']);
    $dob = @input($_POST['dob']);
    $game = @$_POST['game'];
    $married = @input($_POST['married']);
    $agree = @$_POST['agree'];

    if (empty($fname) || !(isset($_POST['fname']))) {
        $fnameerr = 'This field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z\s]+$/',$fname))) {
        $fnameerr = "Only allowed letter and whitespace.";
        $GLOBALS['flag'] = 0;
    }

    if (empty($password) || !(isset($_POST['password']))) {
        $passworderr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (strlen($password) < 6) {
        $passworderr = 'Atleaste 6 characters long.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($gender) || !(isset($_POST['gender']))) {
        $gendererr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($address) || !(isset($_POST['address']))) {
        $addresserr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    
    if (empty($dob) || !(isset($_POST['dob']))) {
        $doberr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($game) || !(isset($_POST['game']))) {
        $gameerr = 'This Field is required.';
        $flGLOBALS['flag'] = 0;
    }

    if (empty($married) || !(isset($_POST['married']))) {
        $marriederr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($agree) || !(isset($_POST['agree']))) {
        $agreeerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    
}


?>