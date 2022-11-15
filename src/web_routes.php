<?php

use App\User;
use App\Car;
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
//    echo "Main";
});
$router->get('/alena', function() {
//    echo "Hello Alena";
});

$router->run();