<?php
    require_once 'controller/motoController.php';
    require_once 'RouterClass.php';

    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    #define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    #define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    #define("TRENDS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/trends');
  #  define("MOTO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/moto');

    $r = new Router();

    //RUTAS DE LA TABLA TRENDS
    $r->addRoute("home", "GET", "motoController", "Home");
    
  //  $r->addRoute("moto/edit/:id", "GET", "motoController", "EditMoto");

    //RUTA POR DEFECTO
    $r->setDefaultRoute("motoController", "Home");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>