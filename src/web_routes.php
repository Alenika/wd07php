<?php

use App\User;
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
//    echo "Main";
});
$router->get('/alena', function() {
//    echo "Hello Alena";
});

$router->run();