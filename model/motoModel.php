<?php

class MotoModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
}

function postMoto($color, $cilindrada, $tanque, $id_tipo_moto){
    $sentencia = $this->db->prepare("INSERT INTO motos(color, cilindrada, motor, id_tipo_moto) VALUES(?,?,?,?)");
    $a = $sentencia->execute(array($color, $cilindrada, $tanque, $id_tipo_moto));
}

function editMotoPorID($id_moto, $color, $cilindrada, $tanque, $id_tipo_moto){
    $sentencia = $this->db->prepare("UPDATE motos SET color=?, cilindrada=?, tanque=?, id_tipo_moto=? WHERE id_moto=?");
    $sentencia->execute(array($id_moto, $color, $cilindrada, $tanque, $id_tipo_moto));


    function DeleteMotoPorID($id_moto){
        $sentencia = $this->db->prepare("DELETE FROM motos WHERE id_moto=?");
        $sentencia->execute(array($id_moto));
    }

    function listMoto(){
        $sentencia = $this->db->prepare("SELECT * FROM motos");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}

?>
 