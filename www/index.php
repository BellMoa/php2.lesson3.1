<?php
require_once __DIR__ .'/autoload.php';
$ctrl= isset($_GET['ctrl'])? $_GET['ctrl'] : 'News';
$action = isset($_GET['action']) ? $_GET['action'] : 'All';


$controllerClassName = $ctrl . 'Controller';


$controller = new $controllerClassName;
$method = 'action'.$action;

$controller->$method();