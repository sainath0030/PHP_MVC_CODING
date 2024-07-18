<?php
use Core\App;
use Core\Validator;
use Core\Database;

$db =   App::container()->resolve(Database::class);

$currentUserId  =  3;

//find the corresponding record.

$note   =   $db->query('SELECT * FROM notes where id = :id', [
        'id' => $_POST['id']
])->findOrFail();

//authorize  that the current user have edit permission.

authorize($note['user_id'] === $currentUserId);

$errors = [];

// validate the form

if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body']  =   'A body of no more than 1000 is required';
}

// if no validation errors , update the record in notes table

if(count($errors)){

    view('notes/edit.view.php', [
        'errors'    => $errors ,
        'heading'   => 'Edit Note',
        'note'      => $note,
    ]);
}


$db->query("update notes set  body = :body where id = :id", 
    [
        'body' => $_POST['body'],
        'id' => $_POST['id'],
    ]);

header('location: /notes');

die();  