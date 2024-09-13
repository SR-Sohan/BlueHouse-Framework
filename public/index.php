<?php
require_once __DIR__ . "/../vendor/autoload.php";


// Routes initial

$routes = require_once __DIR__ . "/../routes/web.php";

$request = $_SERVER['REQUEST_URI'];

$request = explode("?", $request)[0];

if(isset($routes[$request])){

    $controller = $routes[$request][0] ?? null;
    $action = $routes[$request][1] ?? null;

    echo $controller;

    if($controller && $action){
        $newController = new $controller();
        $newController->$acction(); 
    }
}
