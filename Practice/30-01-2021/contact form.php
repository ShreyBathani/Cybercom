<?php

//contact form
echo '<h1>contact form</h1><br>';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if(!empty($name) && !empty($email) && !empty($message)){
        $to = 'shreybathani007@gmail.com';
        $subject = 'Test mail';
        $msg = "Name: $name \nEmail: $email \nMessage: \n\n$message";
        $header = 'From: contact-form <' .$email .'>';
        if(mail($to, $subject, $msg, $header)){
            echo "Thank you for contacting us. We'll be in touch soon!!";
        }
        else{
            echo "Sorry, Error occured. Please try again later!!";
        }        
    }
    else{
        echo "Please fill all fields!!";
    }
}
?>

<form action="contact form.php" method="POST">
    Name:<br><br>
    <input type="text" name="name" required><br><br>
    Email:<br><br>
    <input type="email" name="email" required><br><br>
    Message:<br><br>
    <Textarea name="message" rows="6" cols="30" required></Textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>






















