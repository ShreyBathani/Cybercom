<?php

//unlink & rename file
echo '<h1>unlink & rename file</h1><br>';

$file1 = 'abc.txt';
$file2 = 'rename.txt';

if(@unlink($file1)){
    echo 'File <strong>'.$file1.'</strong> has been deleted!!<br>';
}else{
    echo 'File can\'t be deleted!!<br>';
}

if(@rename($file2, 'change.txt')){
    echo 'File <strong>'.$file2.'</strong> has renamed to <strong>change.txt</strong>!!';
}else{
    echo 'Error renaming!!';
}
?>