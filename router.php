<?php

$url  = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =   [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/note'    => 'controllers/note.php',
    '/notes'    => 'controllers/notes.php',
];

function abort($code =404){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
function routeToController($url,$routes){
    if(array_key_exists($url, $routes)){
        require $routes[$url];
    }else{
      abort();
    }
}

routeToController($url,$routes);