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
    'middleware' => [
        \Next\Middleware\SessionMiddleware::class,
    ],
    'proxies' => [
        'Next\\Cache' => \Next\Cache\Proxy::class,
        'Next\\Database' => \Next\Database\Proxy::class,
        'Next\\Errors' => \Next\Errors\Proxy::class,
        'Next\\Logging' => \Next\Logging\Proxy::class,
        'Next\\Session' => \Next\Session\Proxy::class,
        'Next\\Validation' => \Next\Validation\Proxy::class,
    ],
];
