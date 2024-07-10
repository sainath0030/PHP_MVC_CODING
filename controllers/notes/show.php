<?php

use Core\Database;

$config  = require base_path('config.php');

$db = new Database($config['database']);

$note   =   $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$currentUserId  =   9;

authrize($note['user_id'] == $currentUserId);

view('notes/show.view.php', [
    'note'    => $note ,
    'heading'   => 'Note',
]);