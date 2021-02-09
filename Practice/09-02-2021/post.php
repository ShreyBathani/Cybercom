<?php 
$conn = @mysqli_connect('localhost', 'root', '', 'test');

if(isset($_POST['name'])){
    if(!empty($_POST['name']) && trim($_POST['name']) != ""){
        $name = trim($_POST['name']);
        $query = "INSERT INTO `names` VALUES('', '".mysqli_real_escape_string($conn, $name)."')";
        if(mysqli_query($conn, $query)){
            echo "Successfully Inserted!!";
        }
        else{
            echo "Something Went wrong!!";
        }
    }
    else{
        echo "Please enter a name!!";
    }
}
?>