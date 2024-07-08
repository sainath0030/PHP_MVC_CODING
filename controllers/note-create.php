<?php
$config  = require "config.php";
$db = new Database($config['database']);

$heading =   'Create Note';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $error = [];

    if(strlen($_POST['body']) == 0){
        $error['body']  =   'A body is requred';
    }

    if(strlen($_POST['body']) > 1000){
        $error['body']  =   'Body is greater then 1000 characters';
    }

    if(empty($error)){
        $db->query("insert into notes (body,user_id) values(:body, :user_id)", 
            [
                'body' => $_POST['body'],
                'user_id' => 3
            ]);
    }

    
}

include "views/note-create.view.php";