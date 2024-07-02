<?php
require "functions.php";

$url  = $_SERVER['REQUEST_URI'];

if($url === '/'){
    require 'controllers/index.php';
} else if($url === '/about'){
    require 'controllers/about.php';
} else if($url === '/contact'){
    require 'controllers/contact.php';
}else{
    require 'controllers/404.php';
}