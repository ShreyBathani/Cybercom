<?php
	include 'servervalidation.php';
	include '../database entry.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body><br><br><br>
	<form action="signin.php" name="userdata" method="POST" onsubmit="return validate()">
		<div class="container">
			<div class="header">Sign In</div>
			<div class="content"><br>
				<label>E-mail address<span class="red" >*</span></label><br>
				<input type="email" name="email" id="email">
				<br><span class="error" id="emailerr"><?php echo $emailerr ;?></span><br>
				
				<label>password<span class="red" >*</span></label><br>
				<input type="password" name="password" id="password">
				<br><span class="error" id="passworderr"><?php echo $passworderr ;?></span><br>

				<center><input type="submit" name="submit" id="submit"></center>
			</div>
        </div>
	</form>
	<?php
		if($flag == 1){
            //echo "<h2>Your given values are :</h2>";
			//echo "<p><b>Email: </b>". $email."</p>";
			//echo "<p><b>Password: </b>". $password."</p>";
			form5($conn, $email, $password);
		}
    ?>
</body>
</html>