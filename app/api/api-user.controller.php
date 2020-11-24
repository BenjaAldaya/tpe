<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/user.model.php';
include_once 'app/api/api.view.php';

class ApiUserController{
    private $modeluser;
    private $view;

    function __construct() {
        $this->modeluser = new UserModel();
        $this->view = new ApiView();
    }

    public function get($params = null) {
        // $params es un array asociativo con los parámetros de la ruta
        $idUser = $params[':ID'];
        $user = $this->modeluser->get($idUser);
        if ($user)
            $this->view->response($user, 200);
        else
            $this->view->response("El usuario con el id = $idUser no existe.", 404);
    }

    public function getName($params = null) {
        // $params es un array asociativo con los parámetros de la ruta
        $idUser = $params[':ID'];
        $userName = $this->modeluser->getName($idUser);
        if ($userName)
            $this->view->response($userName, 200);
        else
            $this->view->response("El usuario con el id = $idUser no existe.", 404);
    }
}