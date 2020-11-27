<?php
require_once 'libs/Router.php';
include_once 'app/controllers/skin.controller.php';
include_once 'app/controllers/admin.controller.php';
include_once 'app/controllers/user.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$router = new Router();
// Secciones de la pagina
$router->setDefaultRoute('SkinController','showTArma');
$router->addRoute('home','GET','SkinController','showTArma');
$router->addRoute('home/:PAGE','GET','SkinController','showTArma');
$router->addRoute('armas/:TIPO/:ID','GET','SkinController','showarma');
$router->addRoute('about','GET','SkinController','showAbout');
$router->addRoute('registro','GET','UserController','showRegistro');
$router->addRoute('comprar/:ID','GET','SkinController','showSkin');
$router->addRoute('admin','GET','AdminController','showAdmin');
$router->addRoute('login','GET','UserController','showLogin');
// Acciones del administrador
$router->addRoute('addskin','POST','AdminController','addSkin');
$router->addRoute('addarma','POST','AdminController','addArma');
$router->addRoute('editarma','POST','AdminController','editArma');
$router->addRoute('editar/:ID','GET','AdminController','showEditSkin');
$router->addRoute('editskin/:ID','POST','AdminController','editskin');
$router->addRoute('deletearma','POST','AdminController','deleteArma');
$router->addRoute('deleteskin/:ID','GET','AdminController','deleteSkin');
$router->addRoute('editpermisos','POST','AdminController','editpermisos');
$router->addRoute('deleteuser','POST','AdminController','deleteuser');
// Acciones de la sesion
$router->addRoute('verify','POST','UserController','loginUser');
$router->addRoute('logout','GET','UserController','logout');
$router->addRoute('registrer','POST','UserController','registrer');


$router->route($_REQUEST['action'],  $_SERVER['REQUEST_METHOD']);