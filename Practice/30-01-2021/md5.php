<?php

//md5
echo '<h1>md5</h1><br>';

$passerr = '';
$hash_pwd = '0192023a7bbd73250516f069df18b500';
if(isset($_POST['password'])){
    if(!empty($_POST['password'])){

        /* $file = 'password.txt';
        $handle = fopen($file, 'r');
        $hash_pwd = fread($handle, filesize($file));
        fclose($handle); */
        $password = md5($_POST['password']);
        if($password === $hash_pwd){
            $passerr = "Password is correct!!";
        }
        else{
            $passerr = "Password is incorrect!!";
        }
    }
    else{
        $passerr = "Please enter password!!";
    }
}

?>

<form action="" method="POST">
    Password: <br><br>
    <input type="text" name="password" ><?php echo $passerr; ?><br><br>
    <input type="submit" value="submit">

</form>










