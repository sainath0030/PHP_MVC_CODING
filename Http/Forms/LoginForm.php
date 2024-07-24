<?php
namespace Http\Forms;

use Core\Validator;

class LoginForm{

    protected $errors   =   [];


    public function validate($request){
        
        if(! Validator::email($request['email'])){
            $this->errors['email']  =   'Please provide a valid email .';
        }

        if(! Validator::string($request['password'])){
            $this->errors['password']  =   'Please provide a  password your password.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

}