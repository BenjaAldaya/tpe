<?php
require_once('libs/smarty/libs/Smarty.class.php');

class SkinView{
    
    function showSkins($skins){
        $smarty = new Smarty();

        $smarty->assign('skins', $skins);
        
    }

    function showTArma($armas){
        $smarty = new Smarty();

        $smarty->assign('armas', $armas);

        $smarty->display('templates/skinsList.tpl');
    
    }

    function showError($msg) {
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }
}