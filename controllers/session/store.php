<?php

use Core\App;
use Core\Validator;
use Core\Database;

//form  inputs

$email  =   $_POST['email'];

$password  =   $_POST['password'];

// validate form inputs  if any  error redirect to register page with errors

$errors = [];

if(! Validator::email($email)){
    $errors['email']  =   'Please provide a valid email .';
}

if(! Validator::string($password)){
    $errors['password']  =   'Please provide a  password your password.';
}

if(!empty($errors)){

    return view('session/create.view.php', [
        'errors'    => $errors 
    ]);
    
}

//Check if the account exists

$db =   App::resolve(Database::class);

$user =  $db->query("select * from users where email = :email ", 
    [
        'email' => $email
    ])->find();

// if yes, redirect to login page

if($user){

    if(password_verify($password, $user['password'])){

        login([
            'email' => $email
        ]);
        header('location: /');
    
        exit();
    }
} 


return view('session/create.view.php', [
        'errors'    => [
            'email' => 'No matching account found for that email address and password.' 
        ]
    ]);
    
