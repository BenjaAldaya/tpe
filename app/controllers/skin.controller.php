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

    /*function showSkins(){
        //pido todas las skins
        $skins=$this->model->getAllSkins();
        //muestro las skins
        $this->view->showSkins($skins);
    }*/

    function showTArma(){
        $armas= $this->model->getAllArmas();
        $skins= $this->model->getAllSkins();
        $this->view->showTArma($armas, $skins);
    }

    function showError($msg){
        $this->view->showError($msg);
    }

    function showAbout(){
        $this->view->showAbout();
    }
}