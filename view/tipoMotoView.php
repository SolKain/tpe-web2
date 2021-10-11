<?php

require_once './libs/Smarty.class.php';

class TipoMotoView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHome(){
        $this->smarty->display('templates/home.tpl');
    }

    function showMotos($tipoMoto){
        $this->smarty->assign('motos', $tipoMoto);
        $this->smarty->display('templates/tipoMoto.tpl');
    }

  
}



?>