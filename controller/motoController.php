<?php

require_once './model/motoModel.php';
require_once './view/motoView.php';


class motoController{

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
    
    function Home(){
      //  $this->checkLogginIn();
        $this->view->showHome();
    }

    function insertarMoto(){
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $idTipoMoto = $_POST['id_tipo_moto'];

        $this->model->postMoto($color, $cilindrada, $tanque, $id_tipo_moto));

        }

    function deleteMoto($params = null){
          
                $id = $params[':ID'];
                $this->model->DeleteMotoPorID($id);
                header("Location: ". TRENDS);
           
        }

    function editMoto($params){
                $color = $_POST['color'];
                $cilindrada = $_POST['cilindrada'];
                $tanque = $_POST['tanque'];
                $idTipoMoto = $_POST['id_tipo_moto'];
                $idMoto = $params[':ID']; 

                $this->model->editMotoPorId($id, $color, $cilindrada, $tanque, $id_tipo_moto);



    }  

    function listarMoto($params){
        $id = $params[":ID"];
        
        $motos = $this->model->listMoto($id);
    }
    


}
