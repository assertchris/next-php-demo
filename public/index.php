<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Next\App(require __DIR__ . '/../next.config.php');
$app->serve();
