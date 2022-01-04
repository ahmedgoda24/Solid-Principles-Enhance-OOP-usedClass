<?php

namespace Route\core\Database;

use mysqli;

require_once("Database.php");

class Mysql implements Database{

    private $conn;
    public function __construct($servername,$username,$password,$databasename)
    {
        $this->conn=mysqli_connect($servername,$username,$password,$databasename);
    }
    public function select(string $query):array{
        $result=mysqli_query($this->conn,$query);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);

    }
    public function selectone(string $query):array{
        $result=mysqli_query($this->conn,$query);
        return mysqli_fetch_assoc($result);
    }
    public function insert(string $query):bool{
        return mysqli_query($this->conn,$query);
    }
    public function update(string $query):bool{
        return mysqli_query($this->conn,$query);

    }
    public function delete(string $query):bool{
        return mysqli_query($this->conn,$query);

    }
    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}

?>