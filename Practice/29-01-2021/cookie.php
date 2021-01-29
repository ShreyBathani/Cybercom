<?php

//Cookie
echo '<h1>Cookie</h1><br>';

if (isset($_COOKIE['name'])){
    echo 'welcome ' . $_COOKIE['name'];
}
else{
    echo 'Cookie expired!!';
}

?>