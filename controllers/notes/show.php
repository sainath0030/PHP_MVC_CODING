<?php
$config  = require "config.php";
$db = new Database($config['database']);

$header =   "Note";

$note   =   $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$currentUserId  =   9;

authrize($note['user_id'] == $currentUserId);

include "views/notes/show.view.php";