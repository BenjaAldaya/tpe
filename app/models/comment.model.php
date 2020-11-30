<?php
class commentModel {

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

    function getcommentSkin($idSkin){
        // funcion para obtener una skin por ID de arma
        $query = $this->db->prepare("SELECT * FROM comentarios WHERE id_skin = ?");
        $query->execute([$idSkin]);

        $commentSkin = $query->fetchAll(PDO::FETCH_OBJ);

        return $commentSkin;
    }

    function get($idComment){
        //funcion para obtener un comentario por ID
        $query = $this->db->prepare("SELECT * FROM comentarios WHERE id = ?");
        $query->execute([$idComment]);

        $commentId = $query->fetch(PDO::FETCH_OBJ);

        return $commentId;
    }

    function getcommentUser($idUser){
        // funcion para obtener los comentarios de un usuario
        $query = $this->db->prepare("SELECT * FROM comentarios WHERE id_user = ?");
        $query->execute([$idUser]);

        $commentsUser = $query->fetchAll(PDO::FETCH_OBJ);

        return $commentsUser;
    }

    function delete($id){
        // funcion para borrar una skin en la base de datos
        $query = $this->db->prepare('DELETE FROM comentarios WHERE id = ?');
        $query->execute([$id]);
        return $query->rowCount();
    }

    function update($id, $iduser, $idskin, $comentario,$valoracion){
        // funcion para editar un comentario
        $query = $this->db->prepare("UPDATE comentarios SET id_user= ?, id_skin= ?, comentario= ?, valoracion=? WHERE id = ?");
        $result = $query->execute([$iduser,$idskin,$comentario,$valoracion,$id]);
        
        return $result;
    }

    function insert($iduser,$username,$idskin,$comentario,$valoracion){
        // funcion para insertar una skin en la base de datos
        $query = $this->db->prepare('INSERT INTO comentarios (id_user,usuario,id_skin,comentario,valoracion) VALUES (?,?,?,?,?)');
        $query->execute([$iduser,$username,$idskin,$comentario,$valoracion]);
        return $this->db->lastInsertId();
    }

    function deletebySkin($id){
        // funcion para borrar una skin en la base de datos
        $query = $this->db->prepare('DELETE FROM comentarios WHERE id_skin = ?');
        $succes=$query->execute([$id]);
        return $succes;
    }

    function deletebyUser($id){
        // funcion para borrar una skin en la base de datos
        $query = $this->db->prepare('DELETE FROM comentarios WHERE id_user = ?');
        $succes=$query->execute([$id]);
        return $succes;
    }
}