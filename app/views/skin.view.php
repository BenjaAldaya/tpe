<?php
require_once('libs/smarty/libs/Smarty.class.php');

class SkinView{
    // Pagina principal muestra las skins filtradas o no
    function showSkins($tipo,$armas,$skins,$adminlog){
        $smarty = new Smarty();
        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skins);
        $smarty->assign('tipo', $tipo);
        $smarty->assign('admin', $adminlog);
        // var_dump($skins);
        // die();
        $smarty->display('templates/home.tpl');
    }
    
    function showSkin($tipo,$armas,$skin){
        $smarty = new Smarty();
        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skin);
        $smarty->assign('tipo', $tipo);
        $smarty->display('templates/skinDetail.tpl');
    }

    //pagina de admin

    function showAdmin($tipo,$armas,$skins,$adminlog){
        $smarty = new Smarty();
        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skins);
        $smarty->assign('tipo', $tipo);
        $smarty->assign('admin', $adminlog);
        $smarty->display('templates/admin.tpl');
    } 

    //Pagina de error
    function showError($msg) {
        $smarty = new Smarty();
        $smarty->assign('msg', $msg);
        $smarty->display('templates/error.tpl');
    }
    
    //Pagina de about
    function showAbout(){
        $smarty = new Smarty();
        $smarty->display('templates/about.tpl');
    }
    //Paguna de registro
    function showRegistro(){
        $smarty = new Smarty();
        $smarty->display('templates/formRegistro.tpl');       
    }

    function showLogin(){
        $smarty = new Smarty();
        $smarty->display('templates/formlogin.tpl');
    }


}