<?php

require_once './libs/Smarty.class.php';
require_once "./helpers/authHelper.php";

class MotoView{

    private $smarty;
    private $authHelper;

    function __construct(){
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->display('templates/home.tpl');
    }

    function showMotos($motos, $tipos){
        $this->smarty->assign('motos', $motos);
        $this->smarty->assign('tipos', $tipos);
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->display('templates/motos.tpl');

    }

    function showFormularioEdit($idMoto){
        $this->smarty->assign('idMoto', $idMoto);
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->display('templates/formEditarMoto.tpl');
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showMotoParticular($moto){
        $this->smarty->assign('moto', $moto);
        $this->smarty->assign('isAdmin', $this->authHelper->isAdmin());
        $this->smarty->assign('isLoggedIn', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/motoParticular.tpl');
    }

  
}



?>