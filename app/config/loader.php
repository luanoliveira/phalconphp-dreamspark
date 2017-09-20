<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Blog\Models' => APP_PATH . '/common/models/',
    'Blog'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Blog\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Blog\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
