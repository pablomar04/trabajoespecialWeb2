<?php
require('controller/piezas_controller.php');
require ('config/config_app.php');
$controller = new PiezasController();
if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->inicio();
  die();
}
switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_DEFAULT:
    $controller->inicio();
    break;

    case ConfigApp::$ACTION_VER_PIEZA:
    $controller->verpieza();
    break;
  
  default:
    $controller->inicio();
    break;
}
?>