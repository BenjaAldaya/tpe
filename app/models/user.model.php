<?php
class UserModel {

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

    /**
     * Devuelve un usuario dado un usuario.
     */
    public function getUser($user) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$user]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function getEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function registrer($username,$passhash,$email){
        $query = $this->db->prepare('INSERT INTO usuarios (usuario,email,password,permiso) VALUES (?,?,?,?)');
        $query->execute([$username,$email,$passhash,1]);
    }
}