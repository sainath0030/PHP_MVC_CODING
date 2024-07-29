<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm{

    protected $errors   =   [];

    public function __construct(public array $attributes)
    {
        if(! Validator::email($attributes['email'])){
            $this->errors['email']  =   'Please provide a valid email .';
        }

        if(! Validator::string($attributes['password'], 4)){
            $this->errors['email']  =   'Please provide correct email and  password.';
        }
    }
    public static function validate($attributes)
    {
        $instance  = new static($attributes);

        if($instance->isFailed()){
            
            $instance->throw();
        }

        return $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors, $this->attributes);
    }    

    public function isFailed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field]   = $message;
        
        return $this;
    }   

}