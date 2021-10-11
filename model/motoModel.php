<?php

class MotoModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
}

function postMoto($color, $cilindrada, $tanque, $id_tipo_moto){
    $sentencia = $this->db->prepare("INSERT INTO moto(color, cilindrada, tanque, id_tipo_moto) VALUES(?,?,?,?)");
    $a = $sentencia->execute(array($color, $cilindrada, $tanque, $id_tipo_moto));
}

function editMotoPorID($id_moto, $color, $cilindrada, $tanque, $id_tipo_moto){
    $sentencia = $this->db->prepare("UPDATE moto SET color=?, cilindrada=?, tanque=?, id_tipo_moto=? WHERE id =?");
    $sentencia->execute(array($color, $cilindrada, $tanque, $id_tipo_moto, $id_moto));
}


    function DeleteMotoPorID($id_moto){
        $sentencia = $this->db->prepare("DELETE FROM moto WHERE id = ?");
        $sentencia->execute(array($id_moto));
    }

    function listMoto(){
        $sentencia = $this->db->prepare("SELECT * FROM moto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}

?>
 