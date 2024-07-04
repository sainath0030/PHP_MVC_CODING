<?php
require "functions.php";
//require "router.php";
require "Database.php";


// connect to mysql database.
$config  = require "config.php";

$db = new Database($config['database']);
$id =   $_GET['id'];
$query     = "select * from posts where id = ?";
$posts   =   $db->query($query, [$id])->fetch();
DD($posts);