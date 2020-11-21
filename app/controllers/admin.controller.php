<?php
include_once 'app/helpers/user.helper.php';
include_once 'app/models/skin.model.php';
include_once 'app/models/armas.model.php';
include_once 'app/views/skin.view.php';
include_once 'app/models/user.model.php';

class AdminController {

    private $userhelper;
    private $modelskins;
    private $modelarmas;
    private $modeluser;
    private $view;

    function __construct() {
        $this->modelskins = new SkinModel();
        $this->modelarmas = new ArmasModel();
        $this->userhelper = new UserHelper();
        $this->view = new SkinView();
        $this->modeluser = new UserModel();
        $this->userhelper->checkAdminlogin();
    }

    function showError($msg){
        $this->view->showVError($msg,$tipo,$armas);
    }

    function showAdmin(){
            $armas= $this->modelarmas->getAllArmas();
            $skins= $this->modelskins->getAllSkins();
            $tipo= $this->modelarmas->getTipo();
            $users= $this->modeluser->GetAll();
            $adminlog = 1;
            $this->view->showAdmin($tipo,$armas, $skins ,$adminlog,$users);       
    }


    function addArma(){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
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
        header("Location: " . BASE_URL ."admin");}
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }

    function addSkin(){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
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
        header("Location: " . BASE_URL ."admin") ;}
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }

    function deleteArma(){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
        $id = $_POST['idarma'];

        if (empty($id)) {
            $this->showError('Faltan datos obligatorios');
            die();
        }
        $this->modelskins->delete($id);
        $this->modelarmas->delete($id);

        header("Location: " . BASE_URL ."admin");}
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }

    function deleteSkin($params=null){
        $id = $params[':ID'];
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
        $this->modelskins->delete($id);
        header("Location: " . BASE_URL ."admin");}
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }

    function editArma(){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $id = $_POST['idarma'];

        if (empty($nombre) || empty($tipo)) {
            $this->showError('Faltan datos obligatorios');
            die();
        }

        $this->modelarmas->edit($id,$nombre,$tipo);

        header("Location: " . BASE_URL ."admin");}
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }
    
    function showEditSkin($params=null){
        $idskin = $params[':ID'];
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
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

    function editSkin($params=null){
        $id =$params[':ID'];
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
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
        header("Location: " . BASE_URL ."admin");
        }
    }

    function editPermisos(){
        $id = $_POST['iduser'];
        $permiso = $_POST['permiso'];
        if ($id == 2){
            $this->view->showError('No se puede cambiar los permisos del usuario Admin');
        }else{
        $this->modeluser->updatepermiso($id,$permiso);
        header("Location: " . BASE_URL ."admin");
        }
    }
    function deleteuser(){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
            $id = $_POST['iduser'];
    
            if (empty($id)) {
                $this->showError('Faltan datos obligatorios');
                die();
            }
            // $this->modelcomentarios->deletecoments($id);
            $this->modeluser->deleteuser($id);
    
            header("Location: " . BASE_URL ."admin");}
            else{
                $this->showError('No tienes acceso a esta seccion');
            }
    }
    
}