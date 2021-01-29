<?php

require __DIR__ . '/../vendor/autoload.php';

use OCours\Controllers\MainController;

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
}
// sinon
else {
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '';
}


$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'index'
);

$router->map(
    'GET',
    '/test',
    [
        'controller' => 'MainController',
        'method' => 'test'
    ],
    'test'
);


$router->map(
    'GET',
    '/home',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'home'
);

$router->map(
    'GET',
    '/cours/[a:lessons]?',
    [
        'controller' => 'MainController',
        'method' => 'cours'
    ],
    'cours'
);


$router->map(
    'GET',
    '/cours/[a:lessons]/[a:classe]',
    [
        'controller' => 'MainController',
        'method' => 'lessons'
    ],
    'lessons'
);


$router->map(
    'GET',
    '/clicker',
    [
        'controller' => 'MainController',
        'method' => 'clicker'
    ],
    'clicker'
);

$match = $router->match();

if ($match !== false) {

    $name = $match['target']['controller'];
    $method = $match['target']['method'];

    $infos = $match['params'];

    $params = [
        'baseURI' => $_SERVER['BASE_URI'],
        'infos' => $infos 
    ];


    $controller = new MainController();
    $controller->$method($params);
} else {
    dump('fail');
}
