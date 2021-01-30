<?php

//mail
echo '<h1>mail</h1><br>';

$to = 'shreybathani007@gmail.com';
$subject = 'Test mail';
$msg = "This is a test email.\nI hope you fine\nThank you";
$header = 'From: from-local <shreybathani1999@gmail.com>';

if(mail($to, $subject, $msg, $header)){
    echo "Email has been sent!!";
}
else{
    echo "Error in sending an email!!";
}



?>