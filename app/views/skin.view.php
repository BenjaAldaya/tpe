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
        $smarty->display('templates/home.tpl');
    }
    // Pagina de detalle de skins
    function showSkin($tipo,$armas,$skin,$adminlog){
        // var_dump($skin);
        // die();
        $thisskin = $skin[0];
        $smarty = new Smarty();
        $thisskin = $skin[0];
        $smarty->assign('armas', $armas);
        $smarty->assign('skin', $thisskin);
        $smarty->assign('tipo', $tipo);
        $smarty->assign('admin', $adminlog);
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
    function showError($msg){
        $smarty = new Smarty();
        $smarty->assign('msg', $msg);
        $smarty->display('templates/error.tpl');
    }
    
    //Pagina de about
    function showAbout(){
        $smarty = new Smarty();
        $smarty->display('templates/about.tpl');
    }
    //Pagina de registro
    function showRegistro(){
        $smarty = new Smarty();
        $smarty->display('templates/formRegistro.tpl');       
    }

    //Pagina de log in
    function showLogin($error = null){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/formlogin.tpl');
    }


}