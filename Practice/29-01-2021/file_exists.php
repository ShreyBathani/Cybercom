<?php

//file_exists()
echo '<h1>file_exists()</h1><br>';
if(file_exists("demo.txt")){
    echo 'File already exists';
}else{
    echo 'File doesn\'t exists';
}

?>