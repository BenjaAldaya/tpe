<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/skin.model.php';
include_once 'app/models/armas.model.php';
include_once 'app/views/skin.view.php';

class AdminController {

    private $userhelper;
    private $modelskins;
    private $modelarmas;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->userhelper = new UserHelper();
        $this->view = new SkinView();

        $this->userhelper->checklogin();
    }

    function showAdmin(){
        // Si cumple con que sea un administrador, podra acceder a la pagina admin, si no, no la podra acceder.
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 3)){
            $armas= $this->modelarmas->getAllArmas();
            $skins= $this->modelskins->getAllSkins();
            $tipo= $this->modelarmas->getTipo();
            $adminlog = 1;
            $this->view->showAdmin($tipo,$armas, $skins ,$adminlog);
        }
        else{
            $this->view->showError('No tienes acceso a esta seccion');
        }
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
        $stattrak = $_POST['statrak'];
        $precio = $_POST['precio'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($idarma) || empty($tipo) || empty($estado) || empty($precio)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        // inserto la tarea en la DB
        $this->modelskins->insert($nombre, $idarma, $tipo, $estado, $stattrak, $precio);


        // redirigimos al listado
        header("Location: " . BASE_URL ."admin") ;
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

    function deleteSkin($id){
        $this->modelskins->delete($id);
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
    
    function showEditSkin($idskin){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 3)){
            $armas = $this->modelarmas->getAllArmas();
            $tipo = $this->modelarmas->getTipo();
            $skinarma = $this->modelskins->getskin($idskin);
            $adminlog = 1;
            if(!($skinarma)) {
                $this->view->showError('Skin no encontrada');
            }
            else {
                $this->view->showSkin($tipo,$armas,$skinarma,$adminlog);
            }
        }
        else {
            $this->view->showError('No tienes acceso a esta seccion');
        }
    }

    function editSkin($id){
        $nombre = $_POST['nombre'];
        $idarma = $_POST['idarma'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $coleccion = $_POST['coleccion'];
        $stattrak = $_POST['stattrak'];
        $precio = $_POST['precio'];

        // verifico campos obligatorios
        if (!(isset($nombre) || isset($idarma) || isset($tipo) || isset($estado) || isset($stattrak) || isset($precio))) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        // inserto la tarea en la DB
        $this->modelskins->edit($id,$nombre, $idarma, $tipo,$estado,$stattrak,$precio,$coleccion);


        // redirigimos al listado
        header("Location: " . BASE_URL ."/admin") ;
    }
    
}