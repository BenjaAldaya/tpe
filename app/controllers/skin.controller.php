<?php
include_once 'app/models/skin.model.php';
include_once 'app/models/armas.model.php';
include_once 'app/views/skin.view.php';

class SkinController {

    private $modelskins;
    private $modelarmas;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->view = new SkinView();
    }

    /*function showSkins(){
        //pido todas las skins
        $skins=$this->model->getAllSkins();
        //muestro las skins
        $this->view->showSkins($skins);
    }*/

    function showTArma(){
        $armas= $this->modelarmas->getAllArmas();
        $skins= $this->modelskins->getAllSkins();
        $tipo= $this->modelarmas->getTipo();
        $this->view->showSkin($tipo,$armas, $skins);
    }

    function showError($msg){
        $this->view->showError($msg);
    }

    function showAbout(){
        $this->view->showAbout();
    }
    
    function showarma($idarma){
        $armas= $this->modelarmas->getAllArmas();
        $skinsarma = $this->modelskins->getskinsarma($idarma);
        $tipo= $this->modelarmas->getTipo();
        $this->view->showSkin($tipo,$armas,$skinsarma);
    }

    function showRegistro(){
        $this->view->showRegistro();
    }
}