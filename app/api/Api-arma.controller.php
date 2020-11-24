<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/armas.model.php';
include_once 'app/api/api.view.php';

class ApiArmaController{
    private $modelarmas;
    private $view;

    function __construct() {
        $this->model = new ArmasModel();
        $this->view = new ApiView();
    }

    function getData(){ 
        return json_decode($this->data); 
    } 

    function getAll() {
        $armas = $this->model->getAllArmas();
        $this->view->response($armas, 200);
    }

    public function get($params = null) {
        // $params es un array asociativo con los parámetros de la ruta
        $idArma = $params[':ID'];
        $arma = $this->model->getarma($idSkin);
        if ($arma)
            $this->view->response($arma, 200);
        else
            $this->view->response("El arma con el id=$idArma no existe.", 404);
    }

    public function delete($params = null) {
            $idArma = $params[':ID'];
            $success = $this->model->delete($idArma);
            if ($success) {
                $this->view->response("El arma con el id=$idArma se borró exitosamente.", 200);
            }
            else { 
                $this->view->response("El arma con el id=$idArma no existe.", 404);
            }
    }

    public function add($params = null) {
            $body = $this->getData();

            $nombre = $body->nombre;
            $tipo = $body->tipo;
            $descripcion = $body->descripcion;

            // verifico campos obligatorios
            if (empty($nombre) || empty($tipo)) {
                $this->view->response('Faltan datos obligatorios.', 404);
                die();
            }
    
            $id = $this->modelskins->insert($nombre,$tipo,$descripcion);
    
            if ($id > 0) {
                $arma = $this->model->getArma($id);
                $this->view->response($arma, 200);
            }
            else { 
                $this->view->response("No se pudo insertar", 500);
            }
    }

    public function update($params = null) {
            $idArma = $params[':ID'];
            $body = $this->getData();

            $nombre = $body->nombre;
            $tipo = $body->tipo;
            $descripcion = $body->descripcion;

            $success = $this->modelskins->edit($idSkin, $nombre, $tipo, $descripcion);

            if ($success) {
                $this->view->response("Se actualizó el arma $idArma exitosamente.", 200);
            }
            else { 
                $this->view->response("No se pudo actualizar.", 500);
            }
    }
}