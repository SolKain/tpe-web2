<?php
require_once './controller/motoController.php';
require_once './controller/tipoMotoController.php';
require_once './controller/usuarioController.php';
require_once 'RouterClass.php';




define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("MOTOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/motos');
define("TIPOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/tipos');
define("USUARIOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/user');
define("REGISTRARSE", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/registrarse');
define("LOGIN", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/login');


$r = new Router();


//Rutas tabla motos
$r->addRoute("home", "GET", "motoController", "home");
$r->addRoute("motos", "GET", "motoController", "getMotos");
$r->addRoute("motoParticular/:ID", "GET", "tipoMotoController", "getMotoParticular");
$r->addRoute("tipos", "GET", "tipoMotoController", "getTiposMotos");

$r->addRoute("login", "GET", "usuarioController", "login");
$r->addRoute("verify", "POST", "usuarioController", "verifyLogin");
$r->addRoute("registrarse", "GET", "usuarioController", "showRegistrarse");
$r->addRoute("registrar", "POST", "usuarioController", "registrar");
$r->addRoute("logout", "GET", "usuarioController", "logout");
$r->addRoute("user", "GET", "usuarioController", "getUsuarios");
$r->addRoute("userEdit/:ID", "GET", "usuarioController", "showEditar");
$r->addRoute("userDelete/:ID", "GET", "usuarioController", "deleteUsuario");
$r->addRoute("cambiarPermiso/:ID", "GET", "usuarioController", "cambiarPermisos");

$r->addRoute("filtrar", "POST", "motoController", "filtrarMotos");
$r->addRoute("insert", "POST", "motoController", "insertarMoto");
$r->addRoute("delete/:ID", "GET", "motoController", "deleteMoto");
$r->addRoute("edit/:ID", "POST", "motoController", "editMoto");
$r->addRoute("edit/:ID", "GET", "motoController", "goToEditMoto");
 /* case 'edit':
    if ($verb == 'POST') {
      $motoController->editMoto($params[1]);
    } else {
      $motoController->goToEditMoto($params[1]);
    }
    break;
    */

    //Rutas tabla tipos

$r->addRoute("insertTipo", "POST", "tipoMotoController", "insertTipoMoto");
$r->addRoute("deleteTipo/:ID", "GET", "tipoMotoController", "eliminarTipoMoto");
$r->addRoute("editTipo/:ID", "POST", "tipoMotoController", "editarTipoMoto");
$r->addRoute("editTipo/:ID", "GET", "tipoMotoController", "goToEditTipo");
/*
  case 'editTipo':
    if ($verb == 'POST') {
      $tipoMotoController->editarTipoMoto($params[1]);
    } else {
      $tipoMotoController->goToEditTipo($params[1]);
    }
    break;
    */







//Ruta por defecto
$r->setDefaultRoute("motoController", "home");
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>
