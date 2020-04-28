<?php

use App\Models\Users;

$router->add(
    'GET', 
    '/', 
    function () use ($container) {
        /*$user = new Users($container);
        $data = $user->get(1);
        var_dump($data);*/
        return 'home page';
    }
);

$router->add(
    'GET', 
    '/users/(\d+)', 
    '\App\Controllers\UsersController::show'
);
