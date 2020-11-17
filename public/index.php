<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Next\App();
$app->bind('path.pages', realpath(__DIR__ . '/../pages'));
$app->run();
