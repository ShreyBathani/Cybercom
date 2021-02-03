<?php

require 'core.php';
require 'connection.inc.php';


if(loggedin()){
    $firstname = getuserfield($conn,'firstname');
	$lastname = getuserfield($conn,'surname');
    echo "Welcome, $firstname $lastname <br><br> <a href='logout.php'>Log out</a>";
    
}
else{
    include 'login form.php';
}

?>