<?php

if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (!empty($_GET['action'])) {
        $action = $GET['action'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'task';
    $action = 'index';
};
require_once('routes.php');
