<?php

//visitor browser
echo "<h1>visitor browser</h1><br>";

$browser = get_browser(null,true);
print_r ($browser);
$browser_name = $browser['browser'];
echo "<br>Browser Name : ".$browser_name;

?>