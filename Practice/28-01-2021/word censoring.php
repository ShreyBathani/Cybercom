<?php

//word censoring
echo "<h1>word censoring</h1>";

$find = array('shrey', 'john', 'mark');
$replace = array('s***y', 'j**n', 'm**k');
if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    $user_input =  $_POST['user_input'];
    echo $user_input_new = str_ireplace($find, $replace, $user_input);
}
else{
    $user_input='';
}

?>
<hr>
<form action='word censoring.php' method = 'POST'>
    <textarea name="user_input"><?php  echo $user_input ?></textarea><br><br>
    <input type="submit" value="submit">
</form>