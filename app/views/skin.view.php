<?php
require_once('libs/smarty/libs/Smarty.class.php');

class SkinView{
    
    function showSkins($skins){
        $smarty = new Smarty();

        $smarty->assign('skins', $skins);
        
        $smarty->display('templates/cardSkins.tpl');
    }

    function showTArma($armas, $skins){
        $smarty = new Smarty();

        $smarty->assign('armas', $armas);
        $smarty->assign('skins', $skins);
        $smarty->display('templates/skinsList.tpl');
    
    }

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
}