<?php

class Constructor{
    function __construct($massage){
        $this->DisplayMassage($massage);
    }

    public function DisplayMassage($massage){
        echo $massage;
    } 
}

$demo = new Constructor("Hello from constructor.");

?>