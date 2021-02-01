<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body><br><br><br>
	<form action="signin.php?load=1" name="userdata" method="POST" onsubmit="return validate()">
		<div class="container">
			<div class="header">Sign In</div>
			<div class="content"><br>
				<label>E-mail address</label><br>
				<input type="email" name="email" id="email"><br>
				<label>password</label><br>
				<input type="password" name="password" id="password"><br>
				<center><input type="submit" name="submit" id="submit"></center>
			</div>
        </div>
	</form>
	<?php
		if(isset($_GET['load'])){
            echo "<h2>Your given values are :</h2>";
			echo "<p><b>Email: </b>". @$_POST['email']."</p>";
			echo "<p><b>Password: </b>". @$_POST['password']."</p>";
		}
    ?>
</body>
</html>