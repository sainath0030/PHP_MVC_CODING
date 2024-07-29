<?php


error_reporting( E_ALL );
ini_set( "display_errors", 1 );

use Core\Router;
use Core\Session;
use Core\ValidationException;

const BASE_PATH  = __DIR__ . '/../';

require BASE_PATH . '/vendor/autoload.php';

session_start();

require BASE_PATH . 'Core/functions.php';

/* php running - sudo php -S localhost:82 -t public */

require base_path('views/bootstrap.php');

$router = new Router();

$routes = require base_path('routes.php');

$uri  = parse_url($_SERVER['REQUEST_URI'])['path'];

$method =   $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try{

    $router->router($uri, $method);

} catch (ValidationException $exception){
    
    Session::flash('old', $exception->old);
    Session::flash('errors', $exception->errors);
    
    return redirect( $router->previousUrl());

}

Session::unFlash();

