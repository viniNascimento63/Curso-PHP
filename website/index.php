<?php
// Virtual host: local.cursophp7.com

require_once "vendor/autoload.php";
$app = new \Slim\Slim();

// Primeira padrão
$app->get('/', function () {
    echo 'Home page, Hello!';
});

// Segunda rota
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();
