<?php
include_once 'app/models/skin.model.php';
include_once 'app/views/skin.view.php';

class SkinController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new SkinModel();
        $this->view = new SkinView();
    }

    function showSkins(){
        //pido todas las skins
        $skins=$this->model->getAll();
        //muestro las skins
        $this->view->showSkins($skins);
    }
}