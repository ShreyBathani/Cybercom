<?php

//switch Statement

echo "<h1>Variables</h1><br>";
$greeting = "Night";
switch($greeting){
    case "Morning":
        echo "Good Morning!!";
        break;
    case "Afternoon":
        echo "Good Afternoon!!";
        break;
    case "Evening":
        echo "Good Evening!!";
        break;
    case "Night":
        echo "Good Night!!";
        break;
    default:
        echo "Have a nice day!!";
}

?>