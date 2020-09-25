<?php
require_once('libs/smarty/libs/Smarty.class.php');

class SkinView{

    function showSkins($skins){
        $smarty = new Smarty();

        $smarty->assign('skins', $skins);
    
        $smarty->display('templates/SkinsList.tpl');
    }

    function showError($msg) {
        include 'templates/header.php';

        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";

        include 'templates/footer.php';
    }
}