<?php

class MotoModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
}

function getMotos(){
    return 1;
}


}

?>
 