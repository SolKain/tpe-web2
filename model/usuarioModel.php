<?php

class UsuarioModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
    }

    function getUsuarios(){
        $query = $this->db->prepare("SELECT * FROM usuarios");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getUsuario($usuario){
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $query->execute(array($usuario));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    
    function crearUsuario($usuario, $contrasenia){
        $query = $this->db->prepare("INSERT INTO usuarios(usuario, contrasenia) VALUES (?,?)");
        $query->execute([$usuario, $contrasenia]);
    }

    function esAdministrador($usuario){
        $query = $this->db->prepare("SELECT administrador FROM usuarios WHERE usuario = ?");
        var_dump($usuario);
        $query->execute(array($usuario));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    function eliminarUsuario($id){
        $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id=$id");
        $sentencia->execute();
    }

    function editPermisoUsuario($id, $administrador){
        $sentencia = $this->db->prepare("UPDATE usuarios SET administrador=? WHERE id=?");
        $sentencia->execute([$administrador, $id]);
    }
}




?>
