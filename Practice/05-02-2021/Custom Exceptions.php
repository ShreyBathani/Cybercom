<?php

$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'test';

class ServerException extends Exception{
    function showError(){
        return "Error: '".$this->getMessage()."' thrown on line ".$this->getLine()." in ". $this->getFile();
    }
}

try{
    if(!@mysqli_connect($host, $user, $pass, $db)){
        throw new ServerException("Could not connect to database!!");
    }
    else{
        echo 'Connected';
    }
}
catch(ServerException $ex){
    echo $ex->showError();
}

?>