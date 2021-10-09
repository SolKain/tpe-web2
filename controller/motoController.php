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

    function verificarAdministrador(){

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

    


}
