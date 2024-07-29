<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

//form  inputs

$request   = [
    'email' => $_POST['email'],
    'password'  => $_POST['password']
    ];

$form  =    LoginForm::validate($request);

$signedIn   =  (new Authenticator)->attempt($request); 

if(! $signedIn){

    $form->error(
        'email', 'No matching account found for that email address and password.'
    )->throw();
        
} 

redirect('/');
 
    
