<?php
include_once 'app/models/comment.model.php';
include_once 'app/api/api.view.php';
include_once 'app/models/user.model.php';
include_once 'app/helpers/user.helper.php';

class ApiCommentController{
    private $modelcomment;
    private $modeluser;
    private $userhelper;
    private $view;

    function __construct() {
        $this->modelcomment = new commentModel();
        $this->modeluser = new UserModel();
        $this->userhelper = new UserHelper();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }


    function getData(){ 
        return json_decode($this->data); 
    } 
    
    //util para mostrar comentarios generales en inicio
    // function getAll() {
    //     $comments = $this->modelcomment->getAllcomments();
    //     $this->view->response($comments, 200);
    // }

    // public function get($params = null) {
    //     // $params es un array asociativo con los parámetros de la ruta
    //     $idComment = $params[':ID'];
    //     $comment = $this->modelcomment->get($idComment);
    //     if ($comment)
    //         $this->view->response($comment, 200);
    //     else
    //         $this->view->response("El comentario con el id=$idComment no existe.", 404);
    // }

    public function getCommentsbySkin($params = null){
        $idSkin = $params[':ID'];
        $comments = $this->modelcomment->getcommentSkin($idSkin);
        if($comments)
            $this->view->response($comments, 200);
        else
            $this->view->response("Esta skin no tiene ningun comentario", 404);
    }

    //util para hacer un filtro
    // public function getCommentsbyUser($params = null){
    //     $idUser = $params[':ID'];
    //     $comments = $this->modelcomment->getcommentsUser($idUser);
    //     if($comments)
    //         $this->view->response($comments, 200);
    //     else
    //         $this->view->response("Este usuario no tiene comentarios", 404);
    // }

    public function delete($params = null) {
        $log = $this->userhelper->checkAdminLogin();
        if($log = 1){
            $idComment = $params[':ID'];
            $success = $this->modelcomment->delete($idComment);
            if ($success) {
                $this->view->response("El comentario con la ID = $idComment se borró exitosamente.", 200);
            }
            else { 
                $this->view->response("El comentario con la ID = $idComment no existe.", 404);
            }
        }
        else {
            $this->view->response("No tienes acceso a esta funcion", 404);
        }
    }

    public function add($params = null) {

        if($this->userhelper->checkUserLogin()== 1){
            $body = $this->getData();
            $iduser = $body->id_user;
            $idskin = $params[':ID']; 
            $comentario = $body->comentario; 
            $valoracion = $body->valoracion; 
                

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
        }else{
            $this->view->response("debes iniciar sesion para comentar", 404);
        }
    }

    public function getName($params = null) {
        //funcion para obtener el nombre de una persona teniendo el ID, util para los comentarios
        // $params es un array asociativo con los parámetros de la ruta
        $idUser = $params[':ID'];
        $userName = $this->modeluser->getName($idUser);
        if ($userName)
            $this->view->response($userName, 200);
        else
            $this->view->response("El usuario con el id = $idUser no existe.", 404);
    }

}