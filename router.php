<?php
require_once 'libs/Router.php';
include_once 'app/controllers/skin.controller.php';
include_once 'app/controllers/admin.controller.php';
include_once 'app/controllers/user.controller.php';
include_once 'app/api/api-skin.controller.php';
include_once 'app/api/api-arma.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$router = new Router();
// Secciones de la pagina
$router->setDefaultRoute('SkinController','showTArma');
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
// Acciones de la sesion
$router->addRoute('verify','POST','UserController','loginUser');
$router->addRoute('logout','GET','UserController','logout');
$router->addRoute('registrer','POST','UserController','registrer');
// API
$router->addRoute('skins','GET','ApiSkinController','getAll');
$router->addRoute('skins/:ID', 'GET', 'ApiSkinController', 'get');
$router->addRoute('skins/:ID', 'DELETE', 'ApiSkinController', 'delete');
$router->addRoute('skins', 'POST', 'ApiSkinController', 'add');
$router->addRoute('skins/:ID', 'PUT', 'ApiSkinController', 'update');


$router->route($_REQUEST['action'],  $_SERVER['REQUEST_METHOD']);