<?php
$nameerr = $passworderr = $addresserr = $gameerr = $gendererr = $ageerr = $fileerr = "";
$name = $password = $addres  = $file = "";
$game = $gender = $age = array();
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
    $password = @input($_POST['password']);
    $address = @input($_POST['address']);
    $game = @$_POST['game'];
    $gender = @input($_POST['gender']);
    $age = @input($_POST['age']);
    $file = @input($_POST['file']);
    $size = @$_FILES['file']['size'];
    $filename = @$_FILES['file']['name'];
    $type = @$_FILES['file']['type'];
    $extension = strtolower(substr($filename, strpos($filename, '.') + 1));

    if (empty($name) || !(isset($_POST['name']))) {
        $nameerr = 'This field is required.';
        $GLOBALS['flag'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z\s]+$/',$name))) {
        $nameerr = "Only allowed letter and whitespace.";
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

    if (empty($address) || !(isset($_POST['address']))) {
        $addresserr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    
    if (empty($game) || !(isset($_POST['game']))) {
        $gameerr = 'This Field is required.';
        $flGLOBALS['flag'] = 0;
    }

    if (empty($gender) || !(isset($_POST['gender']))) {
        $gendererr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    
    if (empty($age) || !(isset($_POST['age']))) {
        $ageerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }

    if (empty($_FILES['file'])) {
        $fileerr = 'This Field is required.';
        $GLOBALS['flag'] = 0;
    }
    else if(!(($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') && ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png'))) {
        $fileerr = 'Please use .jpg , .jpeg , .png file';
        $GLOBALS['flag'] = 0;
    }
    else if ($size > 200000) {
        $fileerr = 'Please use Less than 2 MB file';
        $GLOBALS['flag'] = 0;
    }
    
}


?>