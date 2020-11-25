<?php
require_once 'libs/Router.php';
include_once 'app/api/api-comment.controller.php';

$router = new Router();

// $router->addRoute('comments','GET','ApiCommentController','getAll'); 
// $router->addRoute('comments/:ID', 'GET', 'ApiCommentController', 'get');
$router->addRoute('comments/:ID', 'GET', 'ApiCommentController', 'getCommentsbySkin');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentController', 'delete');
$router->addRoute('comments/:ID', 'POST', 'ApiCommentController', 'add');
$router->addRoute('comments/:ID', 'PUT', 'ApiCommentController', 'update');//no pedian update 
$router->addRoute('user/:ID', 'GET', 'ApiCommentController', 'getName');

$router->route($_REQUEST['resource'],  $_SERVER['REQUEST_METHOD']);


//get comentarios por skin
//post comentarios por skin
//delete por id
//sin update 