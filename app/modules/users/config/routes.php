<?php

$router = $di->getRouter();

$router->add('/teste', [
    'namespace' => 'Blog\Modules\Users\Controllers',
    'module' => 'users',
    'controller' => 'teste',
    'index' => 'index'
]);