<?php
use Core\App;
use Core\Validator;
use Core\Database;


$email  =   $_POST['email'];

$password  =   $_POST['password'];

// validate form inputs  if any  error redirect to register page with errors

$errors = [];

if(! Validator::email($email)){
    $errors['email']  =   'Please provide a valid email .';
}

if(! Validator::string($password, 7, 255)){
    $errors['password']  =   'Please provide a  password at least seven characters.';
}

if(!empty($errors)){

    return view('registration/create.view.php', [
        'errors'    => $errors 
    ]);
    
}

//Check if the account exists

$db =   App::resolve(Database::class);

$user =  $db->query("select * from users where email = :email", 
    [
        'email' => $email
    ])->find();

// if yes, redirect to login page

if($user){
    $errors['email']    =   'Email already exist.';
    view('registration/create.view.php', [
        'errors'    => $errors 
    ]);
    exit();
} else {
    //if no, save to the database  and then log user in, and redirect


    $db->query("insert into users (name,email,password) values(:name, :email, :password)", 
        [
            'name' => 'Name',
            'email' => $email,
            'password' => $password,
        ]);

    $_SESSION['user']   =[
        'email' => $email
        ];
        
    header('location: /');

    exit();  
}


