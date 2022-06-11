<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function _construct(){
        $this->host = 'localhost';
        $this->db = 'rooms';
        $this->user = 'root';
        $this->password ='123';
        $this->charset = 'utf8mb4'
    }
}

    function connect(){
        try{

            $connection = "mysql:host=",$this->host, ";dbname" ,$this->db
        }
    }

?>