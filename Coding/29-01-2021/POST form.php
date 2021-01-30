<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php if (isset($_POST['form_submitted'])){ ?> 
        <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>
        <p>You have been registered as <b> <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?> </b></p>
        <p>Go <a href="POST form.php">back</a> to the form</p>
    <?php }else{ ?>
        <h2>Registration Form</h2>
        <form action="POST form.php" method="POST">
            First name:
            <input type="text" name="firstname"><br><br>
            Last name:
            <input type="text" name="lastname"><br><br>
		    <input type="hidden" name="form_submitted" value="1"/>
            <input type="submit" value="Submit">
        </form>
    <?php } ?> 
</body> 
</html>