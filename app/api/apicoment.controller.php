<?php
include_once 'app/models/skin.model.php';
include_once 'app/models/armas.model.php';
include_once 'app/api/api.view.php';

class ApiComentController{
    private $modelskins;
    private $modelarmas;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->view = new ApiView();
    }

    function getAll() {
        $skins = $this->modelskins->getAllSkins();
        $this->view->response($skins, 200);
    }
}