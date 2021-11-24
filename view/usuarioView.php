<?php
require_once './libs/Smarty.class.php';
require_once "./helpers/authHelper.php";

class UsuarioView{

    private $smarty;
    private $authHelper;

    function __construct() {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }

    function showLogin($error = ""){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());      
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/formUser.tpl');
    }

    function showRegistrarse(){
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->display('templates/formCrearUser.tpl');
    }

    function showUsuarios($usuarios){
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/usuarios.tpl');
    }

    function showEditar($idUsuario){
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->assign('idUsuario', $idUsuario);
        $this->smarty->display('templates/formEditarUser.tpl');
    }
    

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

}
