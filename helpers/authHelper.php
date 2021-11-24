<?php
require_once './model/motoModel.php';

class AuthHelper{

    private $model;

    function __construct(){
        $this->model = new UsuarioModel();
    }

    function checkLoggedIn($validarAdministrador = false){
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("Location: ".LOGIN);
            die();
        }
        $esAdministrador = $_SESSION["usuario"]->administrador;
        if ($validarAdministrador && !$esAdministrador){
            // mostrar mensaje o algo
            header("Location: ".MOTOS);
            die();
        }
    }

    function isAdmin(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION["usuario"])){
            return $_SESSION["usuario"]->administrador;
        }
        return false;
    }
    
    function isLoggedIn(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION["usuario"]);
    }

}
