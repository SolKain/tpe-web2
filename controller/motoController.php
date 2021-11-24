<?php

require_once './model/motoModel.php';
require_once './view/motoView.php';
require_once "./helpers/authHelper.php";

class MotoController{

    private $view;
    private $model;
    private $authHelper;


    function __construct(){
        $this->view = new MotoView();
        $this->model = new MotoModel();
        $this->tipoModel = new TipoMotoModel();
        $this->authHelper = new AuthHelper();
    }

    
    function home(){
        $this->view->showHome();
    }
    
    function getMotos(){
        $motos = $this -> model ->listMoto();
        $tipos = $this -> tipoModel ->listTipoMoto();

        $this->view->showMotos($motos, $tipos);
    }
    
    function filtrarMotos(){
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $terreno = $_POST['id_tipo_moto'];
        $motos = $this -> model ->filtrarMotosPorAtributos($color, $cilindrada, $tanque, $terreno);
        $tipos = $this -> tipoModel ->listTipoMoto();   
        $this->view->showMotos($motos, $tipos);
        }

    function insertarMoto(){  
       $this->authHelper->checkLoggedIn(true);
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $idTipoMoto = $_POST['id_tipo_moto'];
        $this->model->postMoto($color, $cilindrada, $tanque, $idTipoMoto);
        $this->getMotos();
        }

    function deleteMoto($params = null){
        $this->authHelper->checkLoggedIn(true);
        $id = $params[':ID'];
        $this->model->DeleteMotoPorID($id);
        header("Location: ". MOTOS);
        }

    function editMoto($params = null){
        $this->authHelper->checkLoggedIn(true);
        $idMoto = $params[':ID'];
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $idTipoMoto = $_POST['id_tipo_moto'];
        $this->model->editMotoPorId($idMoto, $color, $cilindrada, $tanque, $idTipoMoto);
        header("Location: ". MOTOS);
    }  

    function goToEditMoto($params = null){
        $this->authHelper->checkLoggedIn(true);
        $id = $params[':ID'];
        $this->view->showFormularioEdit($id);
    }
    function getMotoParticular($params = null){
        $id = $params[':ID'];
        $moto = $this->model->getMotoParticular($id);
        $this->view->showMotoParticular($moto);
 
       }
}
?>
