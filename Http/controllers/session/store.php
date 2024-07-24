<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

//form  inputs

$request   = [
    'email' => $_POST['email'],
    'password'  => $_POST['password']
    ];

$form  =    new LoginForm;

if($form->validate($request)){
    if((new Authenticator)->attempt($request)){

        redirect('/');    
    } 

    $form->error('email', 'No matching account found for that email address and password.');
    
}

return view('session/create.view.php', [
    'errors'    => $form->errors() 
]);
    
