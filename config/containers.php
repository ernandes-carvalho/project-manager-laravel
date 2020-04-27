<?php

use Pimple\Container;

$container = new Container();
$container['events'] = function () {
    return new Zend\EventManager\EventManager;
};

$container['db'] = function () {
    $dsn = 'mysql:host=localhost;dbname=pp_project_manager';
    $username='root';
    $password = '123456';
    $options = [
        \pdo::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
    ];
    $pdo = new \PDO($dsn, $username, $password, $options);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $pdo;
};
