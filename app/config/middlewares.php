<?php

$app->addMiddleware(
    'before',
    function () {
        session_start();
    }
);

$app->addMiddleware(
    'before',
    function () {
        header('Content-Type: apllication/json');
    }
);

$app->addMiddleware(
    'after',
    function () {
        echo 'after';
    }
);

$app->addMiddleware(
    'after',
    function () {
        echo 'after 2';
    }
);
