<?php

session_start();

//$_SESSION
echo '<h1>Session</h1><br>';

if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo 'welcome ' . $_SESSION['username'];
}
else{
    echo 'Plaese login!!';
}
?>