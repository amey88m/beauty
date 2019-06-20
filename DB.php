<?php

class DB{

    private $host = "localhost";
    private $username = "root";
    private $password = "1234567890";
    private $db = "subscribe";
    public $connect;


    public function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    public function connection()
    {
        if(!$this->connect):
            return mysqli_error();
            exit;
        else:
            return $this->connect;
            exit;
        endif;
    }

    public function numRows($query)
    {
        $result = mysqli_query($this->connect, $query);
        return $result;
    }

}


?>