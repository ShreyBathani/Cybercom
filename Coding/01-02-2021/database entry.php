<?php

$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'form';
$connect_err = "Couldn't connect to database!!"; 
$conn = @mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo '<script>alert("Couldn\'t connect to database!!")</script>';
}
/* else{
    echo 'Connected';
} */


function form1($conn, $name, $password, $address, $game, $gender, $age, $filename){

    $query = "INSERT INTO form1 VALUES ('', '$name', '$password', '$address', '$game', '$gender', '$age', '$filename')";
    if($result = mysqli_query($conn, $query)){
        echo '<script>alert("Data has been successfully recorded!!")</script>';
    }
    else{
        echo '<script>alert("Error!! Data not recorded")</script>';
    }
}

function form2($conn, $fname, $password, $gender, $address, $dob, $games, $married){

    $query = "INSERT INTO form2 VALUES ('', '$fname', '$password', '$gender', '$address', '$dob', '$games', '$married')";
    if($result = mysqli_query($conn, $query)){
        echo '<script>alert("Data has been successfully recorded!!")</script>';
    }
    else{
        echo '<script>alert("Error!! Data not recorded")</script>';
    }
}

function form3($conn, $fname, $lname, $dob, $gender, $country, $email, $phone, $password){

    $query = "INSERT INTO form3 VALUES ('', '$fname', '$lname', '$dob', '$gender', '$country', '$email', '$phone', '$password')";
    if($result = mysqli_query($conn, $query)){
        echo '<script>alert("Data has been successfully recorded!!")</script>';
    }
    else{
        echo '<script>alert("Error!! Data not recorded")</script>';
    }
}

function form4($conn, $name, $email, $subject, $message){

    $query = "INSERT INTO form4 VALUES ('', '$name', '$email', '$subject', '$message')";
    if($result = mysqli_query($conn, $query)){
        echo '<script>alert("Data has been successfully recorded!!")</script>';
    }
    else{
        echo '<script>alert("Error!! Data not recorded")</script>';
    }
}

function form5($conn, $useremail, $userpassword){

    $query = "SELECT `email`, `password` FROM form3 WHERE `email` = '$useremail' AND `password` = '$userpassword'";
    if($result = mysqli_query($conn, $query)){
        if(mysqli_num_rows($result) == 1){
            echo '<script>alert("Successfully login!!")</script>';
        }
        else{
            echo '<script>alert("Incorrect email or password!!")</script>';
        }
    }
    else{
        echo '<script>alert("Error in fetching data!!")</script>';
    }
}














?>