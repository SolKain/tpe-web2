<?php

require_once './libs/Smarty.class.php';

class motoView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHome(){
        $this->smarty->display('templates/home.tpl');
    }

    function showMotos($motos){
        $this->smarty->assign('motos', $motos);
        $this->smarty->display('templates/motos.tpl');
    }
  
}



?>