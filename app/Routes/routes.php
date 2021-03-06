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
        'method' => 'team',
        'controller' => '\App\Controllers\TeamController'
    ],
    'team'
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

$router->map(
    'GET', '/mentions-legales',
    [
        'method' => 'legal_mentions',
        'controller' => '\App\Controllers\MainController'
    ],
    'legal_mentions'
);

$router->map(
    'GET', '/error404',
    [
        'method' => 'error',
        'controller' => '\App\Controllers\ErrorController'
    ],
    'error'
);

