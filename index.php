<?php
require "functions.php";
//require "router.php";

// connect to mysql database.

$dsn    = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=Sai@1234;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement= $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(pdo::FETCH_ASSOC);

foreach($posts as $post){
    echo "<li>". $post['title'] ."</li>";
}