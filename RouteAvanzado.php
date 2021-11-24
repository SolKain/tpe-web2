<?php
require_once './controller/motoController.php';
require_once './controller/tipoMotoController.php';


define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("MOTOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/motos');
define("TIPOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/tipos');


$motoController = new MotoController();
$tipoMotoController = new tipoMotoController();


//lee la accion
if (!empty($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'home'; //accion por defecto si no enviam
}
$verb = $_SERVER['REQUEST_METHOD'];
$params = explode('/', $action);
switch ($params[0]) {
  case 'home':
    $motoController->home();
    break;
  case 'motos':
    $motoController->getMotos();
    break;
  case 'insert':
    $motoController->insertarMoto();
    break;
  case 'delete':
    $motoController->deleteMoto($params[1]);
    break;
  case 'edit':
    if ($verb == 'POST') {
      $motoController->editMoto($params[1]);
    } else {
      $motoController->goToEditMoto($params[1]);
    }
    break;
 
  case 'tipos':
    $tipoMotoController->getTiposMotos();
    break;
  case 'insertTipo':
    $tipoMotoController->insertTipoMoto();
    break;
  case 'deleteTipo':
    $tipoMotoController->eliminarTipoMoto($params[1]);
    break;
  case 'editTipo':
    if ($verb == 'POST') {
      $tipoMotoController->editarTipoMoto($params[1]);
    } else {
      $tipoMotoController->goToEditTipo($params[1]);
    }
    break;
    default:
    $motoController->home();
    break;
}


