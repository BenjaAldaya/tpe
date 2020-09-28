<?php
require_once('libs/smarty/libs/Smarty.class.php');

class SkinView{
    
    // function showSkins($skins){
    //     $smarty = new Smarty();

    //     $smarty->assign('skins', $skins);
    //     $smarty->assign('armas', $armas);
    //     $smarty->display('templates/cardSkins.tpl');
    // }

    function showTArma($tipo,$armas,$skins){
        $smarty = new Smarty();

        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skins);
        $smarty->assign('tipo', $tipo);
        $smarty->display('templates/cardskins.tpl');
    }
    // function showskinarma($tipo,$armas,$skinarmas){
    //     $smarty = new Smarty();
    //     $smarty->assign('armas', $armas);
    //     $smarty->assign('skins', $skinarmas);
    //     $smarty->assign('tipo', $tipo);
    //     $smarty->display('templates/cardSkins.tpl');
    // }

    function showError($msg) {
        include('templates/header.tpl');
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
        include('templates/footer.tpl');
    }
    
    function showAbout(){
        include('templates/header.tpl');
        echo '<h1>Pagina en construccion</h1>';
        include('templates/footer.tpl');
    }

    function showRegistro(){
        $smarty = new Smarty();
        $smarty->display('templates/formRegistro.tpl');       
    }
}