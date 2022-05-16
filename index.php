<?php

require_once "libs/database.php";


if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'pages';
    $action = 'home';
}

$GLOBALS['dir'] = __DIR__;
require_once('routes.php');




