<?php

$router->map(
    'GET', '/',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\MainController'
    ],
    'home'
);

$router->map(
    'GET', '/savoir-faire',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-list'
);

$router->map(
    'GET', '/savoir-faire/[i:id]',
    [
        'method' => 'category',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-category'
);

$router->map(
    'GET', '/nos-projets',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\ProjetController'
    ],
    'projet-list'
);

$router->map(
    'GET', '/nos-projets/[i:id]',
    [
        'method' => 'projet',
        'controller' => '\App\Controllers\ProjetController'
    ],
    'projet-projet'
);

$router->map(
    'GET', '/equipe',
    [
        'method' => 'realisation',
        'controller' => '\App\Controllers\RealisationController'
    ],
    'realisation'
);

$router->map(
    'GET', '/contact',
    [
        'method' => 'contact',
        'controller' => '\App\Controllers\ContactController'
    ],
    'contact'
);

$router->map(
    'POST', '/contact',
    [
        'method' => 'contactCreate',
        'controller' => '\App\Controllers\ContactController'
    ],
    'contact-create'
);

