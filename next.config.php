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
        \Next\Database\Commands\MigrateCommand::class,
    ],
    'middleware' => [
        \Next\Middleware\SessionMiddleware::class,
    ],
    'proxies' => [
        \Next\Cache::class => \Next\Cache\Proxy::class,
        \Next\Database::class => \Next\Database\Proxy::class,
        \Next\Errors::class => \Next\Errors\Proxy::class,
        \Next\Logging::class => \Next\Logging\Proxy::class,
        \Next\Session::class => \Next\Session\Proxy::class,
        \Next\Validation::class => \Next\Validation\Proxy::class,
    ],
];
