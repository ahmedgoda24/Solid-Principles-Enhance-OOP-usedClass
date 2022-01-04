<?php
namespace Route\core\Database;

interface Database{
    public function select(string $query):array;
    public function selectone(string $query):array;
    public function insert(string $query):bool;
    public function update(string $query):bool;
    public function delete(string $query):bool;

}


?>