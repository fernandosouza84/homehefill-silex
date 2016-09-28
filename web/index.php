<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// ... definitions

$app->get('/ola/{name}', function($name){
    return sprintf('Olá %s!', $name);
});

$app->run();
