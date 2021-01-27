<?php

//str_word_count()
echo "<h1>String Functions</h1><br>";

echo "<h2>str_word_count()</h2><br>";
echo str_word_count("Hello world!").'<br>'; 

$str = 'This is an example of string function.';
echo str_word_count($str, 0).'<br>';

print_r (str_word_count($str, 1));
echo '<br>';

print_r (str_word_count($str, 2));
echo '<br>';

print_r (str_word_count($str, 1, '.'));
echo '<br>';

$str = 'This is an example of string function .';
print_r (str_word_count($str, 2, '.'));
echo '<br>';

$str = 'This is an example of string function. & This is tutorial .';
print_r (str_word_count($str, 2, '&.'));
echo '<br>';


//str_shuffle()
echo "<br><h2>str_shuffle()</h2>";
echo str_shuffle("Hello World!!");


//strlen()
echo "<br><h2>strlen()</h2>";
echo strlen("Hello World!!");


//substr()
echo "<br><h2>substr()</h2>";
$str = 'This is an example of string function.';
echo substr($str, 0, 20);


//strrev()
echo "<br><h2>strrev()</h2>";
echo strrev($str);

//similar_text()
echo "<br><h2>similar_text()</h2>";
$str1 = 'Hello everyone!, My name is Shrey Bathani.';
$str2 = 'Hello everyone!, My name is Deep Patel.';
similar_text($str1,$str2,$res);
echo $res;


//trim()
//can see the diffrence in html code (view source)
echo "<br><h2>trim()</h2>";
$str = "    This is trim() function    ";
echo trim($str);


//addslashes()
echo "<br><h2>addslashes()</h2>";
$str = "My friend's father isn't teacher.";
$str = addslashes($str);
echo $str;

//stripslashes()
echo "<br><h2>stripslashes()</h2>";
echo stripslashes($str);

?>