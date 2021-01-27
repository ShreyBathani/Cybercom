<?php

echo "<h1>die() & exit()</h1><br>";
echo "Hello ";

//die("<br>This is from die");

//exit("<br>This is from exit");

echo "World";

@mysqli_connect('localhost','abc','') || die('<br>can\'t able to connect database');
?>