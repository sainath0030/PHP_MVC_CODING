<?php
namespace Http\Forms;

use Core\Validator;

class LoginForm{

    protected $errors   =   [];


    public function validate($request){
        
        if(! Validator::email($request['email'])){
            $this->errors['email']  =   'Please provide a valid email .';
        }

        if(! Validator::string($request['password'], 5)){
            $this->errors['email']  =   'Please provide correct email and  password.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field]   = $message;
    }   

}