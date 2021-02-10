<?php

$validstatus = 0;
$prefixerr = $fnameerr = $lnameerr = $emailerr = $phoneerr = $passworderr = $conpasswordpassworderr = $infoerr = $agreeerr = "";
date_default_timezone_set("Asia/Calcutta");
$created = date("Y-m-d");
$created .="T";
$created .= date("H:i:s");

if(isset($_POST['login'])){

    $GLOBALS['validstatus'] = 1;
    $email = @input($_POST['email']);
    $password = @input($_POST['password']);
    $emailerr = $passworderr = "";


    if (empty($email) || !(isset($_POST['email']))) {
        $emailerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerr = "invalid.";
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($password) || !(isset($_POST['password']))) {
        $passworderr = 'This Field is required.';
        $GLOBALS['validstatus'] = 0;
    } 
    elseif (strlen($password) < 6) {
        $passworderr = 'Password must be at least 6 characters long.';
        $GLOBALS['validstatus'] = 0;
    }

    if($GLOBALS['validstatus'] == 1){
        include 'loginuser.php';
        //header('location: register.php');
    }

}

if(isset($_POST['register'])){

    $GLOBALS['validstatus'] = 1;
    $prefix = @input($_POST['prefix']);
    $fname = @input($_POST['fname']);
    $lname = @input($_POST['lname']);
    $email = @input($_POST['email']);
    $phone = @input($_POST['phone']);
    $password = @input($_POST['password']);
    $conpasswordpassword = @input($_POST['conpasswordpassword']);
    $info = @input($_POST['info']);
    $agree = @$_POST['agree'];
    
    $prefixerr = $fnameerr = $lnameerr = $emailerr = $phoneerr = $passworderr = $conpasswordpassworderr = $infoerr = $agreeerr = "";


    if (empty($prefix) || !(isset($_POST['prefix']))) {
        $prefixerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } 
    
    if (empty($fname) || !(isset($_POST['fname']))) {
        $fnameerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z0-9 ]+$/',$fname))) {
        $fnameerr = "invalid.";
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($lname) || !(isset($_POST['lname']))) {
        $fnameerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } 
    elseif (!(preg_match('/^[a-zA-Z0-9 ]+$/',$lname))) {
        $lnameerr = "invalid.";
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

    if (empty($password) || !(isset($_POST['password']))) {
        $passworderr = 'This Field is required.';
        $GLOBALS['validstatus'] = 0;
    } 
    elseif (strlen($password) < 6) {
        $passworderr = 'Password must be at least 6 characters long.';
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($conpasswordpassword) || !(isset($_POST['conpasswordpassword']))) {
        $conpasswordpassworderr = 'This Field is required.';
        $GLOBALS['validstatus'] = 0;
    } 
    elseif (strlen($conpasswordpassword) < 6) {
        $conpasswordpassworderr = 'Password must be at least 6 characters long.';
        $GLOBALS['validstatus'] = 0;
    }

    if ($password != $conpasswordpassword) {
        $conpasswordpassworderr = 'Password doesn\'t match';
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($info) || !(isset($_POST['info']))) {
        $infoerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($agree) || !(isset($_POST['agree']))) {
        $agreeerr = 'This Field is required.';
        $GLOBALS['validstatus'] = 0;
    }

    if($GLOBALS['validstatus'] == 1){
        include 'insertuser.php';
    }

}

if(isset($_POST['addcategory'])){

    $GLOBALS['validstatus'] = 1;
    $title = @input($_POST['title']);
    $content = @input($_POST['content']);
    $url = @input($_POST['url']);
    $metatitle = @input($_POST['metatitle']);
    $category = $_POST['category'];
    $imgname = basename($_FILES["image"]["name"]);
    $imgsize = $_FILES['image']['size'];
    $imgtype = $_FILES['image']['type'];
    

    if (empty($title) || !(isset($_POST['title']))) {
        $titleerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } 
    
    if (empty($content) || !(isset($_POST['content']))) {
        $contenterr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } 

    if (empty($url) || !(isset($_POST['url']))) {
        $urlerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    } else if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $urlerr = "invalid.";
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($metatitle) || !(isset($_POST['metatitle']))) {
        $metatitleerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($category) || !(isset($_POST['category']))) {
        $categoryerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }

    if (empty($_FILES['image'])) {
        $imageerr = 'required.';
        $GLOBALS['validstatus'] = 0;
    }
    else if(!($imgtype == 'image/jpeg' || $imgtype == 'image/jpg' || $imgtype == 'image/png')) {
        $imageerr = 'Please use .jpg , .jpeg , .png file';
        $GLOBALS['validstatus'] = 0;
    }
    else if ($imgsize > 200000) {
        $imageerr = 'Please use Less than 2 MB file';
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