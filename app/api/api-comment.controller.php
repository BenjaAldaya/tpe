<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/comment.model.php';
include_once 'app/api/api.view.php';

class ApiCommentController{
    private $modelcomment;
    private $view;

    function __construct() {
        $this->modelcomment = new commentModel();
        $this->view = new ApiView();
    }


    function getData(){ 
        return json_decode($this->data); 
    } 

    function getAll() {
        $comments = $this->modelcomment->getAllcomments();
        $this->view->response($comments, 200);
    }

    public function get($params = null) {
        // $params es un array asociativo con los parámetros de la ruta
        $idComment = $params[':ID'];
        $comment = $this->modelcomment->get($idComment);
        if ($comment)
            $this->view->response($comment, 200);
        else
            $this->view->response("El comentario con el id=$idComment no existe.", 404);
    }

    public function getCommentsbySkin($params = null){
        $idSkin = $params[':ID'];
        $comments = $this->modelcomment->getcommentSkin($idSkin);
        if($comments)
            $this->view->response($comments, 200);
        else
            $this->view->response("Esta skin no tiene ningun comentario", 404);
    }

    public function getCommentsbyUser($params = null){
        $idUser = $params[':ID'];
        $comments = $this->modelcomment->getcommentsUser($idUser);
        if($comments)
            $this->view->response($comments, 200);
        else
            $this->view->response("Este usuario no tiene comentarios", 404);
    }

    public function delete($params = null) {
        $idComment = $params[':ID'];
        $success = $this->modelcomment->delete($idComment);
        if ($success) {
            $this->view->response("El comentario con la ID = $idComment se borró exitosamente.", 200);
        }
        else { 
            $this->view->response("El comentario con la ID = $idComment no existe.", 404);
        }
    }

    public function add($params = null) {
        $body = $this->getData();

        $iduser = $body->nombre;
        $idskin = $body->idarma;
        $comentario = $body->tipo;
        $valoracion = $body->estado;


        // verifico campos obligatorios
        if (empty($comentario) || empty($iduser) || empty($idskin) || empty($valoracion)) {
            $this->view->response('Faltan datos obligatorios.', 404);
            die();
        }

        $id = $this->modelcomment->insert($iduser,$idskin,$comentario,$valoracion);

        if ($id > 0) {
            $comment = $this->modelcomment->get($id);
            $this->view->response($comment, 200);
        }
        else { 
            $this->view->response("No se pudo insertar", 500);
        }
    }

}