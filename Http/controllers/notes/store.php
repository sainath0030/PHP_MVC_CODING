<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db =   App::container()->resolve(Database::class);

$errors = [];

if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body']  =   'A body of no more than 1000 is requred';
}

if(!empty($errors)){

    view('notes/create.view.php', [
        'errors'    => $errors ,
        'heading'   => 'Create Note',
    ]);
}


$db->query("insert into notes (body,user_id) values(:body, :user_id)", 
    [
        'body' => $_POST['body'],
        'user_id' => 3
    ]);

header('location: /notes');

die();  


