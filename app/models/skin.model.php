<?php
class SkinModel {

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

    function getAllSkins() {

        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM skin');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $skins = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de tareas

        return $skins;
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


    function getskinsarma($idarma){
        $query = $this->db->prepare("SELECT * FROM skin WHERE id_arma = '$idarma'");
        $query->execute();

        $skinarmas = $query->fetchAll(PDO::FETCH_OBJ);

        return $skinarmas;
    }
}