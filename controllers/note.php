<?php
$config  = require "config.php";
$db = new Database($config['database']);

$header =   "Note";

$note   =   $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
])->fetch();

if(! $note){
    abort();
}

$currentUserId  =   9;

if($note['user_id'] != $currentUserId){
    abort(Response::FORBIDDEN);
}

include "views/note.view.php";