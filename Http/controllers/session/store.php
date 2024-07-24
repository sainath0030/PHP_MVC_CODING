<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

//form  inputs

$request   = [
    'email' => $_POST['email'],
    'password'  => $_POST['password']
    ];

// validate form inputs  if any  error redirect to login page with errors

$form  =    new LoginForm();

if(! $form->validate($request)){
    return view('session/create.view.php', [
        'errors'    => $form->errors() 
    ]);
}

//Check if the email exists

$db =   App::resolve(Database::class);

$user =  $db->query("select * from users where email = :email ", 
    [
        'email' => $request['email']
    ])->find();



// if yes, check for password match

if($user){

    if(password_verify($request['password'], $user['password'])){

        login([
            'email' => $request['email']
        ]);
        header('location: /');
    
        exit();
    }
} 

// if no, redirect to login page with errors

return view('session/create.view.php', [
        'errors'    => [
            'email' => 'No matching account found for that email address and password.' 
        ]
    ]);
    
