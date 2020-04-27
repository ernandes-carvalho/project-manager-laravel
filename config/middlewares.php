<?php

$middlewares = [
    'before' => [
        function ($c) {
            echo 'Before';
        },
        function ($c) {
            echo 'Before 2 ';
        },
    ],
    'after' => [
        function ($c) {
            echo 'after';
        },
        function ($c) {
            echo 'after 2';
        },

    ]
];
