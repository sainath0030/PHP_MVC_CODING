<?php
use Core\App;
use Core\Database;

$db =   App::resolve(Database::class);

$currentUserId  =  3;

$note   =   $db->query('SELECT * FROM notes where id = :id', [
        'id' => $_GET['id']
])->findOrFail();    
    
    
authorize($note['user_id'] === $currentUserId);

view('notes/edit.view.php', [
    'errors'    => [] ,
    'heading'   => 'Edit Note',
    'note'  => $note,
]);