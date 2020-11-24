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

    public function get($id) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getName($id) {
        $query = $this->db->prepare('SELECT usuario FROM usuarios WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function insert($username,$passhash,$email){
        $query = $this->db->prepare('INSERT INTO usuarios (usuario,email,pass,permiso) VALUES (?,?,?,?)');
        $query->execute([$username,$email,$passhash,0]);
        return $this->db->lastInsertId();
    }

    public function GetAll(){
        $query = $this->db->prepare('SELECT * FROM usuarios');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ); 
        return $users;
    }

    public function UpdatePermiso($id,$permiso){
        $query = $this->db->prepare("UPDATE usuarios SET permiso = ? WHERE id = ?");
        $query->execute([$permiso,$id]);
    }
}