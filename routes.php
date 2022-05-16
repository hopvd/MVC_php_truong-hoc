<?php
# routes.php

include_once('Controller/' . $controller . 'Controller.php');

$klass = $controller. 'Controller';
$controller = new $klass;
$controller->$action();

