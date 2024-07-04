<?php
require "functions.php";
//require "router.php";
require "Database.php";


// connect to mysql database.
$config  = require "config.php";

$db = new Database($config['database']);

$posts   =   $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
DD($posts);