<?php

//substring replacement
echo "<h1>substring replce</h1>";
$string1 = 'Hello everyone!! My name is Mark Smith';
$new_string1 = substr_replace($string1,'John',28,4);
echo $new_string1.'<br>';

//string replacement
echo "<h1>string replce</h1>";
$find = array('is','string');
$replace = array('IS','STRING');
$string2 = 'This is a string, and it is a example.';

$new_string2 = str_replace($find,$replace,$string2);

echo $new_string2;
?>