<?php

$name = @$_FILES['file']['name'];
$size = @$_FILES['file']['size'];
$type = @$_FILES['file']['type'];
$tmp_name = @$_FILES['file']['tmp_name'];
$extension = strtolower(substr($name, strpos($name, '.') + 1));
$location = 'upload/';
$maxsize = 2097152;
if(isset($name)){
    if(!empty($name)){
        if(($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') && ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') && $size <= $maxsize){
            if(move_uploaded_file($tmp_name, $location.$name)){
                echo "File has been successfully uploaded!!";
            }
            else{
                echo "Error Occured!!";
            }
        }
        else{
            echo 'File must be jpg/jpeg & size must be 2mb or less';
        }
    }
    else{
        echo "Please select file!!";
    }
}

?>
<form action="form upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="submit">
</form>