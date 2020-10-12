<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/skin.model.php';
include_once 'app/models/armas.model.php';
include_once 'app/views/skin.view.php';

class SkinController {
    private $userhelper;
    private $modelskins;
    private $modelarmas;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->userhelper = new UserHelper();
        $this->view = new SkinView();

        $this->userhelper->checklogin();
    }

    function showTArma(){
        $armas= $this->modelarmas->getAllArmas();
        $skins= $this->modelskins->getAllSkins();
        $tipo= $this->modelarmas->getTipo();
        $adminlog = 0;
        $this->view->showSkins($tipo,$armas, $skins,$adminlog);
    }

    function showError($msg){
        $this->view->showError($msg);
    }

    function showAbout(){
        $this->view->showAbout();
    }
    
    function showarma($idarma){
        $armas = $this->modelarmas->getAllArmas();
        $tipo = $this->modelarmas->getTipo();
        $skinsarma = $this->modelskins->getskinsarma($idarma);
        if(!($skinsarma)) {
            $this->view->showError('No se encontraron skins');
        }
        else {
            $this->view->showSkins($tipo,$armas,$skinsarma);
        }
    }

    function showSkin($idarma){
        $armas = $this->modelarmas->getAllArmas();
        $tipo = $this->modelarmas->getTipo();
        $skinsarma = $this->modelskins->getskin($idarma);
        if(!($skinsarma)) {
            $this->view->showError('Skin no encontrada');
        }
        else {
            $this->view->showSkin($tipo,$armas,$skinsarma);
        } 
    }

    function showRegistro(){
        $this->view->showRegistro();
    }

    function showDetail($id) {
        $task = $this->model->get($id);
        
    }
}