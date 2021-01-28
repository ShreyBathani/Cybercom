<?php

//working withPOST
echo "<h1>working with POST</h1><br>";
$email = 'admin@123.com';
$password = 'admin123';
$msg = '';
if(isset($_POST['submit'])){
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    if (!empty($user_email) && !empty($user_password)) {
        if ($user_email == $email && $user_password == $password) {
			$msg = 'Welcome!';
           } 
           else {
			$msg = 'You entered wrong details!';
		}
       } 
       else {
		$msg = 'All the field required';
	}
}

?>

<?php echo $msg; ?>
<form action="" method="POST">
    <label>Email:</label></br>
	<input type="email" name="email"></br>
	<label>Password:</label></br>
	<input type="password" name="password"></br></br>
	<input type="submit" name="submit">
</form>