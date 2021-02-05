<?php

class DatabaseConnect{
    public function __construct($host, $user, $password, $db){
        echo 'Attempting connection...';
        if($this->Connect($host, $user, $password, $db)){
            echo 'Connected to Database';
        }
        else{
            echo 'Connection failed.';
        }
    }

    public function Connect($host, $user, $password, $db){
        if(mysqli_connect($host, $user, $password, $db)){
            return true;
        }
        else{
            return false;
        }
    }
}

$conn = new DatabaseConnect('localhost', 'root', '', 'test');

?>