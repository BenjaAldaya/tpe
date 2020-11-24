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
    //funcion para obtener todas las armas
    $query = $this->db->prepare ('SELECT * FROM arma');
    $query->execute();

    $armas = $query ->fetchAll(PDO::FETCH_OBJ);

    return $armas;
    }

    function getarma($id){
        $query = $this->db->prepare('SELECT * FROM arma WHERE id = ?');
        $query->execute([$id]);

        $armaid = $query->fetch(PDO::FETCH_OBJ);

        return $armaid;
    }

    function getTipo(){
        //funcion para obtener el tipo de arma
        $query = $this->db->prepare('SELECT DISTINCT tipo FROM arma');
        $query->execute();

        $tipo = $query->fetchAll(PDO::FETCH_OBJ);
        return $tipo; 
    }

    function insert($nombre,$tipo,$descripcion){
        //funcion para insertar una categoria de arma
        $query = $this->db->prepare('INSERT INTO arma (nombre, tipo, descripcion) VALUES (?,?,?)');
        $query->execute([$nombre,$tipo,$descripcion]);

        return $this->db->lastInsertId();
    }

    function edit($id,$nombre,$tipo, $descripcion){
        //funcion para editar una categoria
        $query = $this->db->prepare("UPDATE arma SET nombre = ?, tipo = ?, descripcion = ? WHERE id_arma=?");
        $query->execute([$nombre,$tipo,$descripcion,$id]);
    }

    function delete($id){
        //funcion para eliminar una categoria
        $query = $this->db->prepare('DELETE FROM arma WHERE id_arma = ?');
        $query->execute([$id]);
    }

}