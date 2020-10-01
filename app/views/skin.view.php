<?php
require_once('libs/smarty/libs/Smarty.class.php');

class SkinView{
    // Pagina principal muestra las skins filtradas o no
    function showSkin($tipo,$armas,$skins){
        $smarty = new Smarty();
        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skins);
        $smarty->assign('tipo', $tipo);
        // var_dump($skins);
        // die();
        $smarty->display('templates/home.tpl');
    } 

    //pagina de admin

    function showAdmin($tipo,$armas,$skins){
        $smarty = new Smarty();
        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skins);
        $smarty->assign('tipo', $tipo);
        // var_dump($skins);
        // die();
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
}