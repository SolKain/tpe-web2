<?php

require_once './model/motoModel.php';
require_once './view/motoView.php';


class MotoController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new motoView();
        $this->model = new motoModel();
    }

    /*function verificarAdministrador(){

        return $this->userModel->getAdministrador($_SESSION["user"]);
    }

    /*
    private function checkLogginIn(){
        session_start();
        if (!isset($_SESSION["user"])) {
            header("Location: ". LOGIN);
            die();
        }
    }

    */
    
    function home(){
      //  $this->checkLogginIn();
        $this->view->showHome();
    }
    
    function getMotos(){
        $motos = $this -> model ->listMoto();
        $this->view->showMotos($motos);
    }

    function insertarMoto(){
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $idTipoMoto = $_POST['id_tipo_moto'];

        $this->model->postMoto($color, $cilindrada, $tanque, $idTipoMoto);
        $this->getMotos();
        }

    function deleteMoto($id){
            $this->model->DeleteMotoPorID($id);
            header("Location: ". MOTOS);
        }

    function editMoto($idMoto){
                $color = $_POST['color'];
                $cilindrada = $_POST['cilindrada'];
                $tanque = $_POST['tanque'];
                $idTipoMoto = $_POST['id_tipo_moto'];
                $this->model->editMotoPorId($idMoto, $color, $cilindrada, $tanque, $idTipoMoto);
                header("Location: ". MOTOS);
    }  

    function goToEditMoto($id){
        $this->view->showFormularioEdit($id);
    }
    

    function listarMoto($params){
        $id = $params[":ID"];
        
        $motos = $this->model->listMoto($id);
    }
    


}
?>
