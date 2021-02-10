<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'blog_app';
$connect_err = "Couldn't connect to database!!"; 
$conn = @mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo '<script>alert(\'Couldn\'t connect to database!!\')</script>';
    header('location: login.php');
}

$query = "SELECT * FROM user WHERE `email` = '".mysqli_real_escape_string($conn,$email)."' AND `password` = '".md5(mysqli_real_escape_string($conn,$password))."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) == 1){
    $_SESSION['username'] = $row['2'];
    $_SESSION['userid'] = $row['0'];
    header('location: blog post.php');
}
else{
    echo "<script>alert('Invalid Email or Password')</script>";
}


?>