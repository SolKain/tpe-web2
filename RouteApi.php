<?php
require_once 'libs/Router.php';
require_once './controller/apiComentController.php';
require_once './controller/usuarioController.php';
$router = new Router();

//funciona
$router->addRoute('comentariosGenerales', 'GET', 'apiComentController', 'getComentariosGenerales');

//funciona
$router->addRoute('comentario/:ID', 'POST', 'apiComentController', 'insertComentario');

//funciona
$router->addRoute('comentarios/:ID', 'GET', 'apiComentController', 'getComentarios');
$router->addRoute('comentario/:ID', 'DELETE', 'apiComentController', 'deleteComentario');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>