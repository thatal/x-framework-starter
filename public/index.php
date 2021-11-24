<?php

use App\Controllers\HelloController;
use App\Controllers\UserController;

require __DIR__ . '/../vendor/autoload.php';

$app = new FrameworkX\App();

$app->get('/', new HelloController());
$app->get('/users/{name}', new UserController);

$app->run();
