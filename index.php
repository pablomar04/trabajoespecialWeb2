<?php
require('controllers/nav_controller.php');
require('controllers/piezas_controller.php');
require ('config/config_app.php');

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)||$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
	$controller = new NavController();
  	$controller->mostrar(ConfigApp::$ACTION_DEFAULT);
  	die();
}
switch ($_REQUEST[ConfigApp::$ACTION]) {
  	
  	case ConfigApp::$ACTION_HOME:
  	$controller = new NavController();
    $controller->mostrar(ConfigApp::$ACTION_HOME);
    break;

    case ConfigApp::$ACTION_STOCK:
    $controller = new PiezasController();
    $controller->mostrar();
    break;

    case ConfigApp::$ACTION_VER_PIEZA:
    $controller = new PiezasController();
    $controller->mostrarPieza();
    break;
  
  default:
    echo 'Pagina no encontrada';
    break;
}
?>