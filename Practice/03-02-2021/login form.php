<?php

require 'connection.inc.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_pass = md5($password);
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $query = "SELECT `id` FROM `users` WHERE `username` = '".mysqli_real_escape_string($conn, $username)."' AND `password` = '".mysqli_real_escape_string($conn, $hash_pass)."'";
			if ($query_run = mysqli_query($conn,$query)) {
				$count = mysqli_num_rows($query_run);
				if ($count == 1) {
                    $user_id = mysqli_fetch_array($query_run)['id'];
					$_SESSION['user_id'] = $user_id;
					header('Location: login user.php');
                } 
                else {
					echo "Invalid Username & Password";
				}
			} 
    }
    else{
        echo "You must enter username & password.";
    }
}


?>
<br>
<form action="<?php echo $current_file ?>" method="POST">
    Username : <input type="text" name="username"><br><br>
	Password : <input type="password" name="password"><br><br>
	<input type="submit" name="submit">

</form>