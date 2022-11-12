<?php

use App\User;
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
    $user = new User;
    echo "Main";
});
$router->get('/alena', function() {
    echo "Hello Alena";
});

$router->run();