<?php

require __DIR__.'/vendor/autoload.php';

$c = require __DIR__.'/app/config/containers.php';
$c = new Pimple\Container($c);

if (!empty($argv[1]) && $argv[1] === 'fresh') {
    $c['db']->exec("DROP DATABASE IF EXISTS {$c['settings']['db']['database']}");
    echo 'Database dropped'.PHP_EOL;
}

$files = scandir(__DIR__.'/database');

foreach ($files as $file) {
    $path = __DIR__.'/database/'.$file;
    if (!is_dir($path)) {
        $sql = file_get_contents($path);
        $c['db']->exec($sql);
        echo $file .' is migrated'.PHP_EOL;
    }
}
