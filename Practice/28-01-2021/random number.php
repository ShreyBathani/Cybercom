<?php

//random number
echo "<h1>Random number</h1><br>";

if(isset($_POST['dice'])){
    $rand = rand(1,6);
    echo 'You rolled a '.$rand;
}
?>

<form action='random number.php' method = 'POST'>
    <input type="submit" name="dice" value="Roll dice">
</form>