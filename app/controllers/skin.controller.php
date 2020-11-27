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
    }

    function showTArma($params=null){
        if ($params != null) {
        $base=$params[':PAGE'];
    }else{
        $base=null;
    }
        $baseint=intval($base);
        if($base==null){
            $inicio=0;
            $cant=4;
        }else{
        $cant=$baseint*4;
        $inicio=$cant-4;
    }

        //Controlador llama al modelo para obtener las armas y skins, ademas llama a view para visualizarse.
        $armas = $this->modelarmas->getAllArmas();
        $skins = $this->modelskins->getAllSkins($inicio,$cant);
        $tipo = $this->modelarmas->getTipo();
        $adminlog = 0;
        $this->view->showSkins($tipo,$armas, $skins,$adminlog);
    }

    function showError($msg=null){
        $armas = $this->modelarmas->getAllArmas();
        $tipo = $this->modelarmas->getTipo();
        if ($msg=null){
            $msg='Page not found';
        }
        //Cuando hay un error llamamos a esta funcion, con su respectivo mensaje pasado por parametro.
        $this->view->showError($msg,$tipo,$armas);
    }

    function showAbout(){
        //Pagina de about, llama al view para visualizarse.
        $this->view->showAbout();
    }
    
    function showarma($params = null){
        //Funcion para listar las skins por categoria.
        $idarma = $params[':ID'];
        $armas = $this->modelarmas->getAllArmas();
        $tipo = $this->modelarmas->getTipo();
        $skinsarma = $this->modelskins->getskinsarma($idarma);
        $adminlog = 0;
        if(!($skinsarma)) {
            $this->showError('No se encontraron skins');
        }
        else {
            $this->view->showSkins($tipo,$armas,$skinsarma,$adminlog);
        }
    }

    function showSkin($params = null){
        $userlogin = $this->userhelper->checkUserLogin();
        $idskin = $params[':ID'];
        // Funcion para mostrar la skin en detalle.
        $armas = $this->modelarmas->getAllArmas();
        $tipo = $this->modelarmas->getTipo();
        $skinarma = $this->modelskins->getskin($idskin);
        $adminlog=0;
        $admincomment = $this->userhelper->checkAdminLoginComment();
        if(!($skinarma)) {
            $this->view->showError('Skin no encontrada');
        }
        else {
            $this->view->showSkin($tipo,$armas,$skinarma,$adminlog,$userlogin,$admincomment);
        } 
    }
}