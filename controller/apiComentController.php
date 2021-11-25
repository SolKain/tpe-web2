<?php
  require_once "model/comentariosModel.php";
  require_once "view/apiView.php";
  require_once "helpers/authHelper.php";


  class apiComentController{

    private $view;
    private $model;
    private $helper;

    function __construct(){
        $this->model = new comentariosModel();
        $this->view = new apiView();
        $this->helper = new authHelper();
    }

    function getComentarios($params = null){
        $id_moto = $params[":ID"];
        $comentarios = $this->model->getComentarios($id_moto);
        if(!empty($comentarios)){
            $this->view->response($comentarios, 200);
        }
        else    
            $this->view->response("No hay comentarios para el id:$id_moto", 404);
    }

    function getComentariosGenerales(){
        $comentarios = $this->model->getComentariosGenerales();
        if(!empty($comentarios)){
            $this->view->response($comentarios, 200);
        }
        else{$this->view->response("No hay ningun comentario", 404);}
        
    }

    function getComentario($params = NULL){
        $body = $this->getBody();
        $id = $params[':ID'];
        $comentario = $this->model->postComentario($body->id_moto, $body->id_usuario, $body->comentario, $body->puntaje, $body->fecha);
       
        if(!empty($comentario)){
            $this->view->response($comentario, 200);
        }
        else    
            $this->view->response("El comentario con id=$id no existe porfavor ingrese otro valor existente", 404);
    }

    function deleteComentario($params = null) {
        if($this->helper->checkLoggedIn(true)){
        $idComentario = $params[':ID'];
        $comentario = $this->model->getComentario($idComentario);

        if (!empty($comentario)) {
            $this->model->deleteComentario($idComentario);
            $this->view->response("El comentario id=$idComentario fue eliminado con éxito", 200);
        }
        else 
            $this->view->response("El comentario id=$idComentario not found", 404);
   }
    }


    function insertComentario($params = null){
        $body = $this->getBody();
        $id_moto = $params[':ID'];

        $idComentario = $this->model->postComentario($body->comentario, $body->puntuacion, $id_moto);

        $this->view->response($idComentario, 200);
        if(!empty($idComentario)){
            $this->view->response("Nuevo comentario ha sido insertado", 200);
        }
        else{
            $this->view->response("No se ha insertado el comentario", 404);
        }
        
    }

    function getBody(){
        $body = file_get_contents("php://input");
        return json_decode($body);
    }
}