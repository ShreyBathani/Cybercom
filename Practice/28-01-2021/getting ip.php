<?php

//Getting IP address
echo "<h1>Getting IP address</h1><br>";

$remote_addr = $_SERVER['REMOTE_ADDR'];
$http_client_id = $_SERVER['HTTP_CLIENT_IP'];
$http_foewarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];

if(!empty($http_client_id)){
    $ip = $http_client_id;
}
else if(!empty($http_foewarded_for)){
    $ip = $http_foewarded_for;
}
else {
    $ip = $remote_addr;
}
echo $ip;

echo "<pre>";
print_r($_SERVER);
?>