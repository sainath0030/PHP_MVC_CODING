<?php

use Core\Database;

$config  = require base_path('config.php');

$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
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

} else{

    $currentUserId  =  3;

    $note   =   $db->query('SELECT * FROM notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();    
    
    
    authrize($note['user_id'] === $currentUserId);
    
    view('notes/show.view.php', [
        'note'    => $note ,
        'heading'   => 'Note',
    ]);
}

