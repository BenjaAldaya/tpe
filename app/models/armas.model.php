<?php
class ArmasModel {

    private $db;

    function __construct() {
        // 1. Abro la conexión
        $this->db = $this->connect();
    }

    /**
     * Abre conexión a la base de datos;
     */
    private function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_phantom;charset=utf8', 'root', '');
        return $db;
    }


    function getAllArmas(){
    $query = $this->db->prepare ('SELECT * FROM arma');
    $query->execute();

    $armas = $query ->fetchAll(PDO::FETCH_OBJ);

    return $armas;
    }

    function getTipo(){
        $query = $this->db->prepare('SELECT DISTINCT tipo FROM arma');
        $query->execute();

        $tipo = $query->fetchAll(PDO::FETCH_OBJ);
        return $tipo; 
    }

}