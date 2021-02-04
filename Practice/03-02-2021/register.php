<?php

require 'core.php';
require 'connection.inc.php';
if(!loggedin()){
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $hash_pass = md5($password);
        if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)){
            if($password != $password_again){
                echo "Password doesn't match!!";
            }
            else{
                $query = "SELECT username FROM users WHERE username = '$username'";
                $query_run = mysqli_query($conn, $query);
                if(mysqli_num_rows($query_run) == 1){
                    echo "The username $username alrerady exists.";
                }
                else {
                    $query = "INSERT INTO users VALUES ('', '".mysqli_real_escape_string($conn, $username)."', '".mysqli_real_escape_string($conn, $hash_pass)."', '".mysqli_real_escape_string($conn, $firstname)."', '".mysqli_real_escape_string($conn, $surname)."')";
                    $result = mysqli_query($conn,$query);
                    if ($result) {
                        header('Location: register success.php');
                    } else {
                        echo "Sorry we couldn\'t register you at this time, Try again later.";
                    }
                }
            }
        }
        else{
            echo "All fields are riquired";
        }
    }
?>

<form action="register.php" method="POST">
    Username: <input type="text" name="username" value="<?php if (isset($username)) { echo $username; }?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    Password again: <input type="password" name="password_again"><br><br>
    Firstname: <input type="text" name="firstname" value="<?php if (isset($firstname)) { echo $firstname; }?>"><br><br>
    Surname: <input type="text" name="surname" value="<?php if (isset($surname)) { echo $surname; }?>"><br><br>
    <input type="submit" value="Register" name="register">
</form>

<?php
}

else if(loggedin()){
    echo "You already registered and loggged in.";
}

?>