<?php

namespace Kimit\Mvc\core;

use Exception;

class db{
    private $connection;

    private $table;

    private $sql;

    public function __construct()
    {
        $this->connection = mysqli_connect($_ENV['DB_SERVER'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']);
    }

    public function table($name){
        $res =  mysqli_query($this->connection,"SELECT * FROM $name");
        if(is_object($res)){
            $this->table = $name;
            return $this;
        }

        throw new Exception("table :($name) not found");
      
    }

    public function select($columns = "*"){
        $this->sql = "SELECT $columns FROM $this->table";
        return $this;
    }

    public function get(){
        $query = mysqli_query($this->connection,$this->sql);
        $error = mysqli_error($this->connection);
        if($error){
            throw new Exception($error);
        }
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}


