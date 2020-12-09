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
        'method' => 'expertise',
        'controller' => '\App\Controllers\ExpertiseController'
    ],
    'expertise'
);

$router->map(
    'GET', '/realisations',
    [
        'method' => 'realisation',
        'controller' => '\App\Controllers\RealisationController'
    ],
    'realisation'
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

