<?php

use Core\Database;

$config  = require base_path('config.php');

$db = new Database($config['database']);

$notes   =   $db->query('SELECT * FROM notes where user_id = :user_id', [
                'user_id' => 3,
                    ])->get();

view('notes/index.view.php', [
    'notes'    => $notes ,
    'heading'   => 'Notes',
]);