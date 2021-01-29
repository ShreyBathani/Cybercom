<?php

function hit_count()
{
    $filename = 'count.txt';

    $handle = fopen($filename, 'r');
    $count = fread($handle, filesize($filename));
    fclose($handle);

    $count++;
    $handle = fopen($filename, 'w');
    fwrite($handle, $count);
    fclose($handle);
}
?>