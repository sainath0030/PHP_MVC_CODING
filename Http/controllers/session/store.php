<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

//form  inputs

$request   = [
    'email' => $_POST['email'],
    'password'  => $_POST['password']
    ];

$form  =    new LoginForm();

if($form->validate($request)){
    if((new Authenticator)->attempt($request)){

        redirect('/');    
    } 
    $form->error('email', 'No matching account found for that email address and password.');   
    
}

Session::flash('old', [
    'email' =>  $request['email'],
]);
Session::flash('errors', $form->errors());

redirect('/login');

    
