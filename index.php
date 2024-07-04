<?php
require "functions.php";
//require "router.php";

// connect to mysql database.

class Databse {
    public $connection;

    public function __construct(){
        $dsn    = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=Sai@1234;charset=utf8mb4";
        $this->connection =  new PDO($dsn);
    }
    
    public function query($query){
        $statement= $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}

$db = new Databse();
$post   =   $db->query("select * from posts where id =1")->fetch(PDO::FETCH_ASSOC);
DD($post['title']);