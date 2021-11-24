<?php

require_once './model/usuarioModel.php';
require_once './view/usuarioView.php';
require_once './helpers/authHelper.php';

class UsuarioController
{


    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
        $this->authHelper = new AuthHelper();
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }

    function login()
    {
        $this->view->showLogin();
    }

    function getUsuarios()
    {
        $usuarios = $this->model->getUsuarios();
        $this->view->showUsuarios($usuarios);
    }

    function showRegistrarse()
    {
        $this->view->showRegistrarse();
    }

    function registrar()
    {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        $contraseniaSegura = password_hash($contrasenia, PASSWORD_BCRYPT);
        $this->model->crearUsuario($usuario, $contraseniaSegura);
        $this->view->showLogin();
    }

    function verifyLogin()
    {
        if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
            $usuario = $this->model->getUsuario($usuario);
            var_dump($usuario->contrasenia);
            var_dump(password_hash($contrasenia, PASSWORD_BCRYPT));
            if ($usuario && password_verify($contrasenia, $usuario->contrasenia)) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        } else {
            $this->view->showLogin("Complete usuario y contraseña");
        }
    }

    function deleteUsuario($params = null)
    {
        $id = $params[':ID'];
        $this->model->eliminarUsuario($id);
        header("Location: " . USUARIOS);
    }
   
    function showEditar($params = null)
    {
        $id = $params[':ID'];
        $this->view->showEditar($id);
    }

    function cambiarPermisos($params = null)
    {
        $this->authHelper->checkLoggedIn(true);
        $id = $params[':ID'];
        $administrador = isset($_POST['administrador']);
        
        $this->model->editPermisoUsuario($id, $administrador);
        header("Location: " . USUARIOS);
    }
}
