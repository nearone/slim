<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->config(array(
    'debug' => true,
    'templates.path' => './templates'
));

$settingValue = $app->config('templates.path');

//echo $settingValue;

$app->get('/hello/:name', function ($name) use ($app) {
    $app->render('hello.php', array('name' => $name));
});

$app->run();
