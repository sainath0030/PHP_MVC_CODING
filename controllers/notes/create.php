<?php

use Core\Database;
use Core\Validator;

$config  = require  base_path('config.php');
$db = new Database($config['database']);

$errors = [];

$heading =   'Create Note';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body']  =   'A body of no more than 1000 is requred';
    }

    if(empty($error)){
        $db->query("insert into notes (body,user_id) values(:body, :user_id)", 
            [
                'body' => $_POST['body'],
                'user_id' => 3
            ]);
    }

    
}

view('notes/create.view.php', [
    'errors'    => $errors ,
    'heading'   => 'Create Note',
]);