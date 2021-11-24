<?php

require_once './libs/Smarty.class.php';

class TipoMotoView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showSeccionTipos(){
        $this->smarty->display('templates/tipoMoto.tpl');
    }

    function showTipoMotos($tiposMoto){
        $this->smarty->assign('tipos', $tiposMoto);
        $this->smarty->display('templates/tipoMoto.tpl');
    }

    function showFormularioEditTipo($idTipoMoto){
        $this->smarty->assign('idTipo', $idTipoMoto);
        $this->smarty->display('templates/formEditarTipo.tpl');
    }

}



?>