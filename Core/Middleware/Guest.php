<?php
namespace Core\Middleware;

class Guest {

    public function handle(){
        if($_SESSION['user'] ?? false){
            http_response_code(302);
            header('location: /');
            exit();
        }
    }
}