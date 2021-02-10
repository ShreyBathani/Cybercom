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
        
	    include "navbar.php";
            if(isset($_GET['category-id'])){
                $id = $_GET['category-id'];
            }else{
            $id = $_POST['id'];
            }
            $host = 'localhost';
            $user = 'root';
            $pass= '';
            $db = 'blog_app';
            $connect_err = "Couldn't connect to database!!"; 
            $conn = @mysqli_connect($host, $user, $pass, $db);
            $query = "SELECT * FROM category WHERE `id` = $id";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result);
                $title = $row['2'];
                $content = $row['5'];
                $url = $row['4'];
                $metatitle = $row['3'];
            }  
            include "validation.php";
            if($GLOBALS['validstatus'] == 1){
                $query = "UPDATE category SET `title` = '".$title."', `content` = '".$content."', `url` = '".$url."', `metatitle` = '".$metatitle."', `updated_at` = '".$created."', `img name` = '".$_FILES["image"]["name"]."' WHERE `id` = '".$id."'";
                $result = mysqli_query($conn, $query);
                if($result){
                    header('Location: contact.php');
                }
                else{
                    $alertmsg = "<div id='alert' class='alert alert-danger alert-dismissible col-6'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong>Error: </strong>Something went wrong!
                                </div>";
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