<?php

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
    die();
}

function authrize($condition, $status = Response::FORBIDDEN){
    if(! $condition){
        abort($status);
    }
}