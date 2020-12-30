<?php

/*

S'occuper de remettre les lettres du header au centre en media 800









*/
require __DIR__ . '/../vendor/autoload.php';

use OCours\Controllers\MainController;

$router = new AltoRouter();

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
    '/home',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'home'
);

$router->map(
    'GET',
    '/cours',
    [
        'controller' => 'MainController',
        'method' => 'cours'
    ],
    'cours'
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

    $params = ['baseURI' => $_SERVER['BASE_URI']];


    $controller = new MainController();
    $controller->$method($params);
} else {
    dump('fail');
}
