<?php 
$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'blog_app';
$connect_err = "Couldn't connect to database!!"; 
$conn = @mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo '<script>alert("Couldn\'t connect to database!!")</script>';
    header('location: register.php');
}

$query = "INSERT INTO user VALUES ('', '".mysqli_real_escape_string($conn,$prefix)."', '".mysqli_real_escape_string($conn,$fname)."', '".mysqli_real_escape_string($conn,$lname)."', '".mysqli_real_escape_string($conn,$phone)."', '".mysqli_real_escape_string($conn,$email)."', '".md5(mysqli_real_escape_string($conn,$password))."', '".$created."', '".mysqli_real_escape_string($conn,$info)."', '".$created."', '".$created."')";
if($result = mysqli_query($conn, $query)){
    echo '<script>alert("Data has been successfully recorded!!")</script>';
    header('location: login.php');
}
else{
    echo '<script>alert("Error!! Data not recorded")</script>';
}


?>