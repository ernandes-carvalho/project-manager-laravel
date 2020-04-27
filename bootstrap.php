<?php

require __DIR__.'/vendor/autoload.php';

$router = new SON\Framework\Router;

$router->add('GET', '/', function () {
    return 'home page';
});

$router->add('GET', '/projects/(\d+)', function ($params) {
    return "listando projetos {$params[1]}";
});

echo $router->run();
