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
        // devuelvo el arreglo obtenido de la respuesta
        return $skins;
    }

    function getskinsarma($idarma){
        $query = $this->db->prepare("SELECT * FROM skin WHERE id_arma = '$idarma'");
        $query->execute();

        $skinarmas = $query->fetchAll(PDO::FETCH_OBJ);

        return $skinarmas;
    }

    function insert($nombre,$idarma,$tipo,$estado,$statrak,$precio){
        $query = $this->db->prepare('INSERT INTO skin (nombre,id_arma,tipo,estado,stattrak,precio) VALUES (?,?,?,?,?,?)');
        $query->execute([$nombre,$idarma,$tipo,$estado,$statrak,$precio]);
    }

    function deleteId($id){
        $query = $this->db->prepare('DELETE FROM skin WHERE id_arma = ?');
        $query->execute([$id]);
    }
}