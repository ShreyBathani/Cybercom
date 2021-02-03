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
	<form action="contactus.php" name="userdata" method="POST" onsubmit="return validate()">
		<div class="container">
			<div class="header">CONTACT US!</div>
			<div class="content">
					<input type="text" name="name" id="name" placeholder="Name...">
					<span class="error" id="nameerr"><?php echo $nameerr; ?></span>

					<input type="email" name="email" id="email" placeholder="Email..." >
					<span class="error" id="emailerr"><?php echo $emailerr; ?></span>

                    <input type="text" name="subject" id="subject" placeholder="Subject...">
					<span class="error" id="subjecterr"><?php echo $subjecterr; ?></span>

					<textarea name="message" id="message" cols="30" rows="6" placeholder="Message..." ></textarea>
					<span class="error" id="messageerr"><?php echo $messageerr; ?></span>

			</div>
			<div class="footer">
				<input type="submit" name="submit" value="SEND MESSAGE">
			</div>
        </div>
	</form>
	<?php
		if($flag == 1){
            echo "<h2>Your given values are :</h2>";
			echo "<p><b>Name: </b>". $name."</p>";
			echo "<p><b>Email: </b>". $email."</p>";
			echo "<p><b>Subject: </b>". $subject."</p>";
			echo "<p><b>Message: </b> $message</p>";
			form4($conn, $name, $email, $subject, addslashes($message));
		}
    ?>
</body>
</html>