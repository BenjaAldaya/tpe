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
    function getAll() {

        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM skin');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $skins = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de tareas

        return $skins;
    }
}