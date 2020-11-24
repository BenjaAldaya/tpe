<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/armas.model.php';
include_once 'app/api/api.view.php';

class ApiSkinController{
    private $modelskins;
    private $modelarmas;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->view = new ApiView();
    }

    function getData(){ 
        return json_decode($this->data); 
    } 

    function getAll() {
        $skins = $this->modelskins->getAllSkins();
        $this->view->response($skins, 200);
    }

    public function get($params = null) {
        // $params es un array asociativo con los parámetros de la ruta
        $idSkin = $params[':ID'];
        $skin = $this->modelskins->getskin($idSkin);
        if ($skin)
            $this->view->response($skin, 200);
        else
            $this->view->response("La skin con el id=$idSkin no existe.", 404);
    }

    public function delete($params = null) {
            $idSkin = $params[':ID'];
            $success = $this->modelskins->delete($idSkin);
            if ($success) {
                $this->view->response("La skin con el id=$idSkin se borró exitosamente.", 200);
            }
            else { 
                $this->view->response("La skin con el id=$idSkin no existe.", 404);
            }
    }

    public function add($params = null) {
            $body = $this->getData();

            $nombre = $body->nombre;
            $idarma = $body->idarma;
            $tipo = $body->tipo;
            $estado = $body->estado;
            $stattrak = $body->stattrak;
            $precio = $body->precio;

            // verifico campos obligatorios
            if (empty($nombre) || empty($idarma) || empty($tipo) || empty($estado) || empty($precio)) {
                $this->view->response('Faltan datos obligatorios.', 404);
                die();
            }
    
            $id = $this->modelskins->insert($nombre,$idarma,$tipo,$estado,$stattrak,$precio);
    
            if ($id > 0) {
                $skin = $this->modelskins->getSkin($id);
                $this->view->response($skin, 200);
            }
            else { 
                $this->view->response("No se pudo insertar", 500);
            }
    }

    public function update($params = null) {
            $idSkin = $params[':ID'];
            $body = $this->getData();

            $nombre = $body->nombre;
            $idarma = $body->idarma;
            $tipo = $body->tipo;
            $estado = $body->estado;
            $stattrak = $body->stattrak;
            $precio = $body->precio;

            $success = $this->modelskins->edit($idSkin, $nombre, $idarma, $tipo, $estado, $stattrak, $precio, $coleccion);

            if ($success) {
                $this->view->response("Se actualizó la skin $idSkin exitosamente.", 200);
            }
            else { 
                $this->view->response("No se pudo actualizar.", 500);
            }
    }
}