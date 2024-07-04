<?php
$config  = require "config.php";
$db = new Database($config['database']);

$header =   "Note";

$note   =   $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->fetch();

include "views/note.view.php";