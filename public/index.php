<?php

require_once '../vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) 
{
    $router->setBasePath($_SERVER['BASE_URI']);
}
else 
{
    $_SERVER['BASE_URI'] = '/';
}

require_once '../app/Routes/routes.php';

$match = $router->match();
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error');
$dispatcher->dispatch();