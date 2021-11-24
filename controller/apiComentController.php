<?php
  require_once "model/comentariosModel.php";
  require_once "api/view/apiView.php";
  require_once "model/usuarioModel.php";
  require_once "helpers/authHelper.php";


  class ApiComentController{

    private $apiView;
    private $commentModel;
    private $userModel;
    private $helper;

    function __construct(){
        $this->commentModel = new ComentariosModel();
        $this->apiView = new ApiView();
        $this->userModel = new UsuarioModel();
        $this->helper = new AuthHelper();
    }
    function getComentarios($params = null){
            if(isset($_GET["puntaje"])){
                $puntaje = $_GET["puntaje"];
            } else {
                $puntaje = true;
            }
            if(isset($_GET["sort"]) && isset($_GET["order"])){
                $atributo = $_GET["sort"];
                $criterio = $_GET["order"];
            } else {
                $atributo = "puntaje";
                $criterio = "asc";
            }
                $id_producto = $params[":ID"];
                $comentarios = $this->model->getComentarios($id_producto, $puntaje, $atributo, $criterio);
                return $this->view->response($comentarios, 200);
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
        if($this->authHelper->checkLoggedIn(true)){
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
        $id_moto = $params[":ID"];

        $idComentario = $this->model->postComentario($body->comentario, $body->puntuacion, $id_moto);

        $this->view->response($idComentario, 200);
        if(!empty($idComentario)){
            $this->view->response("Nuevo comentario ha sido insertado", 200);
        }
        else{
            $this->view->response("No se ha insertado el comentario", 404);
        }
       
        
    }

    private function getBody(){
        $body = file_get_contents("php://input");
        return json_decode($body);
    }
}