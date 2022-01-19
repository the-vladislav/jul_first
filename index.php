<?php

if (!file_exists('config.php')) {
    die('Create config.php, MFC!!!');
}
require_once 'config.php';

spl_autoload_register(function($className) {
    $classFile = 'vendor' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($classFile)) {
        include_once $classFile;
        return true;
    }
    return false;
});

Router::init();