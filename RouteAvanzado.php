<?php
    require_once 'controller/motoController.php';


    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    //lee la accion
    if (!empty($_GET['action'])) {
      $action = $_GET['action'];
    }else {
      $action = 'home'; //accion por defecto si no enviam
    }
  
    $params = explode('/', $action);

    switch($params(0)) {
         case 'home':
        home();
        case 'motos':
          motos();
    }


?>