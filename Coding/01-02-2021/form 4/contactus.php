<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body><br><br><br>
	<form action="contactus.php?load=1" name="userdata" method="POST" onsubmit="return validate()">
		<div class="container">
			<div class="header">CONTACT US!</div>
			<div class="content">
					<input type="text" name="name" id="name" placeholder="Name...">
					<input type="email" name="email" id="email" placeholder="Email..." >
                    <input type="text" name="subject" id="subject" placeholder="Subject...">
					<textarea name="message" id="message" cols="30" rows="6" placeholder="Message..." ></textarea>
			</div>
			<div class="footer">
				<input type="submit" name="submit" value="SEND MESSAGE">
			</div>
        </div>
	</form>
	<?php
		if(isset($_GET['load'])){
            echo "<h2>Your given values are :</h2>";
			echo "<p><b>Name: </b>". @$_POST['name']."</p>";
			echo "<p><b>Email: </b>". @$_POST['email']."</p>";
			echo "<p><b>Subject: </b>". @$_POST['subject']."</p>";
			echo "<p><b>Message: </b>". @$_POST['message']."</p>";
		}
    ?>
</body>
</html>