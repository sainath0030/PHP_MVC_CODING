<?php
namespace  Core;

class Authenticator{

    public function attempt($request)
    {
        $user =  (App::resolve(Database::class))->query("select * from users where email = :email ", 
            [
                'email' => $request['email']
            ])->find();
        
        if($user){

            if(password_verify($request['password'], $user['password'])){

                $this->login([
                    'email' => $request['email']
                ]);
                
                return true;
            }
        } 

        return false;
    }

    public function login($user)
    {
        $_SESSION['user']   =[
            'email' =>  $user['email']
        ];
        session_regenerate_id(true);
    }
    
    public function logout()
    {
        Session::destroy();
    }
}