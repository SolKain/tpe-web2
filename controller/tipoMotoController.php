<?php
require_once './model/tipoMotoModel.php';
require_once './view/tipoMotoView.php';

class tipoMotoController
{

    private $view;
    private $model;


    function getTiposMotos()
    {
        $tiposMotos = $this->model->listTipoMoto();
        $this->view->showTipoMotos($tiposMotos);
    }

    function __construct()
    {
        $this->view = new tipoMotoView();
        $this->model = new tipoMotoModel();
    }


    function insertTipoMoto()
    {
        $this->model->postTipoMoto( $_POST['terreno']);
        header("Location: ". TIPOS);
    }

    function editarTipoMoto($id)
    {
        $terreno = $_POST['terreno'];
        $this->model->editTipoMoto($id, $terreno);
        header("Location: ". TIPOS);
    }

    function eliminarTipoMoto($id)
    {
        $this->model->DeleteTipoMotoPorID($id);
        header("Location: ". TIPOS);
    }

    function listarTipoMoto($params)
    {
        $id = $params[":ID"];

        $tipoMotos = $this->model->listTipoMoto($id);
    }

    function goToEditTipo($id)
    {
        $this->view->showFormularioEditTipo($id);
    }
}
