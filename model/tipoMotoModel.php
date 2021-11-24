<?php

class TipoMotoModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
}

function listTipoMoto(){
    $sentencia = $this->db->prepare("SELECT * FROM tipo_moto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function postTipoMoto($tipoMoto){
    $sentencia = $this->db->prepare("INSERT INTO tipo_moto(terreno) VALUES(?)");
    $sentencia->execute(array($tipoMoto));
}

function deleteTipoMotoPorID($idTipoMoto){
    $sentencia = $this->db->prepare("DELETE FROM tipo_moto WHERE id = ?");
    $sentencia->execute(array($idTipoMoto));
}

function editTipoMoto($idTipoMoto, $terreno){
    $sentencia = $this->db->prepare("UPDATE tipo_moto SET terreno = ? WHERE id = ? ");
    $sentencia->execute(array($terreno, $idTipoMoto));
}

}

?>
 