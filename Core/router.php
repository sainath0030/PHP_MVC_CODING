<?php

function abort($code = 404){
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}
function routeToController($url,$routes){
    if(array_key_exists($url, $routes)){
        require base_path($routes[$url]);
    }else{
        dd($url);
      //abort();
    }
}

$routes = require base_path('routes.php');

$url  = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($url,$routes);