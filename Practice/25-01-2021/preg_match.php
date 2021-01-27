<?php

echo "<h1>preg_match() function</h1><br>";
$str = "This is String";
$pattern = "/is /";
echo (preg_match($pattern, $str) ? 'match' : 'no match'). '<br>';

$pattern = "/string/";
echo (preg_match($pattern, $str) ? 'match' : 'no match'). '<br>';

$pattern = "/string/i";
echo (preg_match($pattern, $str) ? 'match' : 'no match'). '<br>';
?>