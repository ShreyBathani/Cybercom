<?php

include "validation.php";
include "db/database.php";

if($GLOBALS['validstatus'] == 1){
    $contact = new Database;
    $data = array(mysqli_real_escape_string($contact->conn, $name), mysqli_real_escape_string($contact->conn, $email), mysqli_real_escape_string($contact->conn, $phone), mysqli_real_escape_string($contact->conn, $title), $created);
    $check = $contact->insert($data);
    if($check == 1){
        $alertmsg = "<div id='aler' class='alert alert-success alert-dismissible col-6'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Success: </strong>Contact has been recorded!
                    </div>";
        $name = $email = $phone = $title = "";
    }
    elseif($check == 0){
        $alertmsg = "<div id='aler' class='alert alert-danger alert-dismissible col-6'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Error: </strong>Something went wrong!
                    </div>";
    }
    else{
        $alertmsg = "<div id='aler' class='alert alert-info alert-dismissible col-6'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Error: </strong>Email or Phone already exist!
                    </div>";
    }

    
}
?>