<?php

require ('connect to db server.php');
?>

<form action="" method="POST">Select Food Type:
    <select name='uh'>
        <option value="h">Healthy</option>
        <option value="u">Un-Healthy</option>
    </select><br><br>
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['uh']) && !empty($_POST['uh'])){
    $uh = $_POST['uh'];
    $query = "SELECT `name`, `calories` FROM `food` WHERE `healthy_unhealthy` = '$uh'";

    if($result = mysqli_query($conn, $query)){
        if(mysqli_num_rows($result) == null){
            echo "No results found.";
        }
        else{
            while($data = mysqli_fetch_assoc($result)){
                $name = $data['name'];
                $calories = $data['calories'];
                echo "$name has $calories calories.<br>";
            }
        }
    }
    else{
        echo mysqli_error($conn);
    }
}

?>