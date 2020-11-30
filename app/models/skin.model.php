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
    //$gsent->bindParam(':calories', $calorías, PDO::PARAM_INT);
    function getAllSkins($inicio) {

        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM skin LIMIT '.$inicio.','.cantpag.'');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $skins = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de tareas
        // devuelvo el arreglo obtenido de la respuesta
        return $skins;
    }

    function getskinsarma($idarma,$inicio){
        // funcion para obtener una skin por ID de arma
        $query = $this->db->prepare('SELECT * FROM skin WHERE id_arma = ? LIMIT '.$inicio.','.cantpag.'');
        $query->execute([$idarma]);

        $skinarmas = $query->fetchAll(PDO::FETCH_OBJ);

        return $skinarmas;
    }

    function getskin($idskin){
        //funcion para obtener una skin por ID de skin
        $query = $this->db->prepare("SELECT * FROM skin WHERE id = ?");
        $query->execute([$idskin]);

        $skin = $query->fetch(PDO::FETCH_OBJ);

        return $skin;
    }


    function insert($nombre,$idarma,$tipo,$estado,$stattrak,$precio,$image=null){
        // funcion para insertar una skin en la base de datos
        if($image){
            $sql='INSERT INTO skin (nombre,id_arma,tipo,estado,stattrak,precio,imagen) VALUES (?,?,?,?,?,?,?)';
            $params=[$nombre,$idarma,$tipo,$estado,$stattrak,$precio,$image];
        }else{
            $sql='INSERT INTO skin (nombre,id_arma,tipo,estado,stattrak,precio) VALUES (?,?,?,?,?,?)';
            $params=[$nombre,$idarma,$tipo,$estado,$stattrak,$precio];
        }
        $query = $this->db->prepare($sql);
        $query->execute($params);
        return $this->db->lastInsertId();
    }

    function delete($id){
        // funcion para borrar una skin en la base de datos
        $query = $this->db->prepare('DELETE FROM skin WHERE id = ?');
        $query->execute([$id]);
        return $query->rowCount();
    }

    function edit($id,$nombre, $idarma, $tipo,$estado,$stattrak,$precio,$coleccion,$image=null){
        if($image){
            $sql="UPDATE skin SET nombre= ?, id_arma= ?, tipo= ?, estado=?, stattrak= ?, precio=? , coleccion=?, imagen=? WHERE id = ?";
            $params=[$nombre, $idarma, $tipo,$estado,$stattrak,$precio,$coleccion,$image,$id];
        }else{
            $sql="UPDATE skin SET nombre= ?, id_arma= ?, tipo= ?, estado=?, stattrak= ?, precio=? , coleccion=? WHERE id = ?";
            $params=[$nombre, $idarma, $tipo,$estado,$stattrak,$precio,$coleccion,$id];
        }
        // funcion para editar una skin en la base de datos
        $query = $this->db->prepare($sql);
        $query->execute($params);
    }

    function removeimg($id,$nombre, $idarma, $tipo,$estado,$stattrak,$precio,$coleccion){
        $sql="UPDATE skin SET nombre= ?, id_arma= ?, tipo= ?, estado=?, stattrak= ?, precio=? , coleccion=?, imagen=? WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$nombre, $idarma, $tipo,$estado,$stattrak,$precio,$coleccion,null,$id]);
    }
}