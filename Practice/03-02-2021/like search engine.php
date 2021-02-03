<?php

require 'connection.inc.php';

if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    if (!empty($search_name)) {
        $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string($conn, $search_name)."%'";
        $query_run = mysqli_query($conn,$query);
        $count =mysqli_num_rows($query_run);
        if ($count > 0) {
            echo $count .' results found.<br>';
            while ($row = mysqli_fetch_array($query_run)) {
                echo $row['name']."<br>";
            }
        } else {
            echo "No Result Found.";
        }
    }
}


?>

<br>
<form action="" method="POST">
		Name : <input type="text" name="search_name"><br><br>
		<input type="submit" name="submit">
</form>