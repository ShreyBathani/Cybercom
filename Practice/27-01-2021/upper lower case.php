<?php

//upper lower case
echo "<h1>upper lower case</h1>";
$str = "i could be any case.";
echo 'String: '. $str;
echo '<br> Upeesrcase: '. strtoupper($str);
echo '<br> Lowerrcase: '. strtolower($str);
echo '<br> Lowercase first charachter of string: '. lcfirst($str);
echo '<br> Uppercase first charachter of string: '. ucfirst($str);
echo '<br> Upeesrcase first character of each word: '. ucwords($str);

?>