<?php

function hit_count()
{
    $user_ip =  $_SERVER['REMOTE_ADDR'];
    $found = false;
    $ip_data = file('ip.txt');

    foreach ($ip_data as $ip) {
        $ip_single = trim($ip);
        if ($user_ip == $ip_single) {
            $found = true;
            break;
        }
    }

    if ($found == false) {
        $filename = 'count.txt';

        $handle = fopen($filename, 'r');
        $count = fread($handle, filesize($filename));
        fclose($handle);

        $count++;
        $handle = fopen($filename, 'w');
        fwrite($handle, $count);
        fclose($handle);

        $handle = fopen('ip.txt', 'a');
        fwrite($handle, $user_ip . "\n");
        fclose($handle);
    }
}
?>