<?php
class ComentariosModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
}

function getComentarios(){
    $sentencia = $this->db->prepare("SELECT * FROM comentarios");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function getComentario($id){
    $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id=$id");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function deleteComentario($id){
    $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id=$id");
    $sentencia->execute();
}

function postComentario($comentario, $puntuacion){
    $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario, puntuacion) VALUES(?,?)");
    $a = $sentencia->execute(array($comentario, $puntuacion));
    return $this->db->lastInsertId();
}

}
?>