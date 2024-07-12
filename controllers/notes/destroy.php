<?php

use Core\Database;

$config  = require base_path('config.php');

$db = new Database($config['database']);

     $currentUserId  =   3;

    $note   =   $db->query('SELECT * FROM notes where id = :id', [
        'id' => $_POST['id']
    ])->findOrFail();
    
       
    authrize($note['user_id'] === $currentUserId);
     
    $db->query('DELETE FROM notes where id = :id', [
        'id' => $_POST['id']
    ]);    

    header('location: /notes');
    
    exit();



