<?php
require_once 'libs/Router.php';
require_once './controller/apiComentController.php';

$router = new Router();

$router->addRoute('comentarios', 'GET', 'apiComentController', 'getComentarios');
$router->addRoute('comentarios', 'POST', 'apiComentController', 'insertarComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'apiComentController', 'deleteComentario');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>