<?php
include_once 'app/controllers/skin.controller.php';


// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $controller = new SkinController();
        //$controller->showSkins();
        $controller->showTArma();
    break;
    case 'armas':
        switch ($params[1]){
            case 'Pistola':
                $controller = new SkinController();           
                $controller->showarma($params[2]);
            break;
            case'Rifle':
                $controller = new SkinController();           
                $controller->showarma($params[2]);
            break;
            case'Cuchillo':
                $controller = new SkinController();           
                $controller->showarma($params[2]);
            break;
            case'Subfusil':
                $controller = new SkinController();           
                $controller->showarma($params[2]);
            break;
            case'Pesada':
                $controller = new SkinController();           
                $controller->showarma($params[2]);
            break;
            case'Guantes':
                $controller = new SkinController();           
                $controller->showarma($params[2]);
            break;         
         }
    break;
    case 'about':
        $controller = new SkinController();
        $controller->showAbout();
    break;
    case 'registro':
        $controller = new SkinController();
        $controller->showRegistro();
    break;
    default:
        header("HTTP/1.0 404 Not Found");
        $msg = '404 not found';
        $controller = new SkinController();
        $controller->showError($msg);
    break;
}
