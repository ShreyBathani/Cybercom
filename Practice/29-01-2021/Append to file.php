<?php

//Append to file 
echo '<h1>Append to file</h1><br>';

if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(!empty($name)){
        $handle = fopen("demo.txt", "a");
        fwrite($handle, $name."\n");
        fclose($handle);
    }
    else{
        echo 'Please enter a name!!';
    }
}



?>
<form action="" method="post">
    Name:<br><br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="submit">
</form>