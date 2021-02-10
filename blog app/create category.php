<!DOCTYPE html>
<html>
    <head>
        <title>create category</title>
        <?php
	        include "header.php";
        ?>
    </head>
    <body>
    <?php
        include "login check.php";
        include "validation.php";
	    include "navbar.php";
            $host = 'localhost';
            $user = 'root';
            $pass= '';
            $db = 'blog_app';
            $connect_err = "Couldn't connect to database!!"; 
            $conn = @mysqli_connect($host, $user, $pass, $db);
            $query = "SELECT `title` FROM category";
            $result = mysqli_query($conn, $query);
            $cnt = mysqli_num_rows($result) + 1;
            if($GLOBALS['validstatus'] == 1){
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                $query = "INSERT INTO category VALUES ('', '".$cnt."', '".mysqli_real_escape_string($conn,$title)."', '".mysqli_real_escape_string($conn,$metatitle)."', '".mysqli_real_escape_string($conn,$url)."', '".mysqli_real_escape_string($conn,$content)."', '".mysqli_real_escape_string($conn,$created)."', '".mysqli_real_escape_string($conn,$created)."', '".$_FILES["image"]["name"]."')";
                $result = mysqli_query($conn, $query);
                if(!$result){
                    echo '<script>alert("Error in creating category")</script>';
                }else{
                    header('location: manage category.php');
                }
            }   


        ?>
        <div class="box1">
            <p><center>Add New Category</center><p>
            <?php  
                include 'category form.php';
            ?>
        </div>
        <script type="text/javascript" src="./js/validation.js"></script>
    </body>
</html>