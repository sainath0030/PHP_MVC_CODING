<?php

use Core\Database;

$config  = require base_path('config.php');

$db = new Database($config['database']);

$query  =   'SELECT * FROM notes where user_id=9';

$notes   =   $db->query($query)->get();

view('notes/index.view.php', [
    'notes'    => $notes ,
    'heading'   => 'Notes',
]);