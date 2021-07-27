<?php

use Todo\Controllers\TaskController;

$controllers = [
    'page' => ['error'],
    'task' => ['index', 'Test'],
];

if (
    !array_key_exists($controller, $controllers) ||
    !in_array($action, $controllers[$controller])
) {
    $controller = 'page';
    $action = 'error';
}

require_once('src/Controllers/' . ucwords($controller) . 'Controller.php');

$classControllerName = ucwords($controller) . 'Controller';
$controller = new $classControllerName;
$controller->$action();
