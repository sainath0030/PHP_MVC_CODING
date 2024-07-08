<?php
require "Validator.php";
$config  = require "config.php";
$db = new Database($config['database']);

$heading =   'Create Note';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $error = [];

    if(! Validator::string($_POST['body'], 1, 1000)){
        $error['body']  =   'A body of no more than 1000 is requred';
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