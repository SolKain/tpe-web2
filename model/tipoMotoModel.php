<?php

class TipoMotoModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
}

function getTipoMoto(){
    $sentencia = $this->db->prepare("SELECT * FROM tipo_moto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function consultaIdNombreContinente($nombreContinente){
    $sentencia = $this->db->prepare("SELECT id_continente FROM continente WHERE nombre =" . "\"" . $nombreContinente . "\"");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function postMoto($continente){
    $sentencia = $this->db->prepare("INSERT INTO moto(id) VALUES(?)");
    $sentencia->execute(array($continente));
}

function DeleteContinentePorID($id){
    $sentencia = $this->db->prepare("DELETE FROM continente WHERE id_continente=?");
    $sentencia->execute(array($id));
}

function editContinente($id, $continente){
    $sentencia = $this->db->prepare("UPDATE continente SET nombre=" . "\"" . $continente . "\"" . "WHERE id_continente=$id");
    $sentencia->execute();
}

}

?>
 