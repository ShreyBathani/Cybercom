<?php 
$conn = @mysqli_connect('localhost', 'root', '', 'test');

if(isset($_GET['str'])){
    $str = $_GET['str'];
    $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string($conn, $str)."%'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res)){
        echo $row['name']."<br>";
    }
    if(mysqli_num_rows($res) == 0){
        echo "No Suggestion";
    }
}
else{
    echo "Suggestion is not Working";
}
?>