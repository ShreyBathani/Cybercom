<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'contact_app');

define('TABLE', 'contacts');

class Database{
    public $conn;

    public function __construct(){
        $this->conn = new mysqli(HOST, USER, PASSWORD, DB);
        if(!$this->conn){
            die('Connection Error: '. $conn->connect_error);
        }
    }

    public function insert($data){
        $strdata = implode("', '",$data);
        $email = $data['1'];
        $phone = $data['2'];
        if(mysqli_num_rows($this->select('email',$email))>0 || mysqli_num_rows($this->select('phone',$phone))>0){
            return 2;
        }
        else{
            $query = "INSERT INTO ".TABLE." VALUES('', '".$strdata."')";
            $res = mysqli_query($this->conn, $query);
            if(!$res){
                return 0;
            }
            else{
                return 1;
            }
        }
    }

    public function select($param='',$value=''){
        if($param=='' && $value==''){
            $query = "SELECT * FROM ".TABLE;
        }
        else{
            $query = "SELECT * FROM ".TABLE." WHERE `".$param."` = '".$value."'";
        }
        $res = mysqli_query($this->conn, $query);
        if($res){
            return $res;
        }
        else{
            return 0;
        }
    }

    public function update($id, $data){
        $query = "UPDATE ".TABLE." SET `name` = '".$data['0']."', `email` = '".$data['1']."', `phone` = '".$data['2']."', `title` = '".$data['3']."' WHERE `id` = '".$id."'";
        $res = mysqli_query($this->conn, $query);
        if($res){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function delete($param,$value){
        $query = "DELETE FROM ".TABLE." WHERE `".$param."` = '".$value."'";
        $res = mysqli_query($this->conn, $query);
        if($res){
            return $res;
        }
        else{
            return 0;
        }
    }
}
?>