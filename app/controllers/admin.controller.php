<?php
include_once 'app/models/skin.model.php';
include_once 'app/models/armas.model.php';
include_once 'app/views/skin.view.php';

class AdminController {

    private $modelskins;
    private $modelarmas;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->view = new SkinView();
    }

    function showAdmin(){
        $armas= $this->modelarmas->getAllArmas();
        $skins= $this->modelskins->getAllSkins();
        $tipo= $this->modelarmas->getTipo();
        $this->view->showAdmin($tipo,$armas, $skins);
    }


    function addArma(){
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($tipo)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        // inserto la tarea en la DB
        $this->modelarmas->insert($nombre, $tipo);

        // redirigimos al listado
        header("Location: " . BASE_URL ."admin");
    }

    function addSkin(){
        $nombre = $_POST['nombre'];
        $idarma = $_POST['idarma'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $statrak = $_POST['statrak'];
        $precio = $_POST['precio'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($idarma) || empty($tipo) || empty($estado) || empty($statrak) || empty($precio)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        // inserto la tarea en la DB
        $this->modelskins->insert($nombre, $idarma, $tipo,$estado,$statrak,$precio);


        // redirigimos al listado
        header("Location: " . BASE_URL ."/admin") ;
    }

    function deleteArma(){
        $id = $_POST['idarma'];

        if (empty($id)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }
        $this->modelskins->deleteId($id);
        $this->modelarmas->delete($id);

        header("Location: " . BASE_URL ."admin");
    }

    function deleteSkin(){
        $id = $_POST['idskin'];

        if (empty($nombre) || empty($tipo)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        $this->modelarmas->delete($id);

        header("Location: " . BASE_URL ."admin");
    }

    function editArma(){
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $id = $_POST['idarma'];

        if (empty($nombre) || empty($tipo)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        $this->modelarmas->edit($id,$nombre,$tipo);

        header("Location: " . BASE_URL ."admin");
    }

    function editSkin(){
        $nombre = $_POST['nombre'];
        $idarma = $_POST['idarma'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $statrak = $_POST['statrak'];
        $precio = $_POST['precio'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($idarma) || empty($tipo) || empty($estado) || empty($statrak) || empty($precio)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        // inserto la tarea en la DB
        $this->modelskins->edit($nombre, $idarma, $tipo,$estado,$statrak,$precio);


        // redirigimos al listado
        header("Location: " . BASE_URL ."/admin") ;
    }
    
}