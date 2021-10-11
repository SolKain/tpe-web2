<?php
require_once './model/tipoMotoModel.php';
require_once './view/tipoMotoView.php';

class tipoMotoController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new tipoMotoView();
        $this->model = new tipoMotoModel();
    }


    function insertTipoMoto(){
        $idTipoMoto = $_POST['id_tipo_moto'];
        $this->model->postTipoMoto($idTipoMoto);
        $this->view->ShowHomeLocation();
    }

    function editarTipoMoto($params){
        $id = $params[':ID'];
        $terreno = $_POST['terreno'];
        $this->model->editTipoMoto($id, $terreno);
    }

    function eliminarTipoMoto($params){
        $id = $params[':ID'];
        $this->model->DeleteTipoMoto($id);
    }

    function listarTipoMoto($params){
        $id = $params[":ID"];
            
            $tipoMotos = $this->model->listTipoMoto($id);
        }
    }

    ?>
    