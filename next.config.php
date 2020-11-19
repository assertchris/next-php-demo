<?php

return [
    'env' => 'dev',
    'database' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'database' => 'next',
        'username' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
    'paths' => [
        'pages' => __DIR__ . '/pages',
        'migrations' => __DIR__ . '/migrations',
        'log' => __DIR__ . '/next.log',
    ],
    'commands' => [
        \Next\Commands\MigrateCommand::class,
    ],
];
