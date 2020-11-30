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
        $armas = $this->modelarmas->getAllArmas();
        $tipo = $this->modelarmas->getTipo();
        //Cuando hay un error llamamos a esta funcion, con su respectivo mensaje pasado por parametro.
        $this->view->showError($msg,$tipo,$armas);
    }

    function showAdmin($params=null){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
            if ($params != null) {
                $base=$params[':PAGE'];
            }else{
                $base=null;
            }
                $baseint=intval($base);
                if($base==null){
                    $inicio=0;
                    $cant=4;
                }else{
                $cant=$baseint*4;
                $inicio=$cant-4;
            }
            $armas = $this->modelarmas->getAllArmas();
            $skins = $this->modelskins->getAllSkins($inicio);
            $tipo = $this->modelarmas->getTipo();
            $users = $this->modeluser->GetAll();
            $adminlog = 1;
            $this->view->showAdmin($tipo, $armas, $skins , $adminlog, $users);
        }
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }


    function addArma(){
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $descripcion = $_POST['descripcion'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($tipo)) {
            $this->showError('Faltan datos obligatorios');
            die();
        }

        // inserto la tarea en la DB
        $this->modelarmas->insert($nombre, $tipo,$descripcion);

        // redirigimos al listado
        header("Location: " . BASE_URL ."admin");}
        else{
            $this->showError('No tienes acceso a esta seccion');
        }
    }
    function uniqueSaveName($realName, $tempName) {
        
        $filePath = "images/" . uniqid("", true) . "." 
            . strtolower(pathinfo($realName, PATHINFO_EXTENSION));

        move_uploaded_file($tempName, $filePath);

        return $filePath;
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
                $this->showError('Faltan datos obligatorios');
                die();
            }
            if($_FILES['input_image']['type'] == "image/jpg" || $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] == "image/png" ){
                $imagename= $this->uniqueSaveName($_FILES['input_image']['name'],$_FILES['input_image']['tmp_name']);
                $this->modelskins->insert($nombre, $idarma, $tipo, $estado, $stattrak, $precio,$imagename);

            }else{
                $this->modelskins->insert($nombre, $idarma, $tipo, $estado, $stattrak, $precio);
            }
            // redirigimos al listado
            header("Location: " . BASE_URL ."admin") ;
        }else{
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
        if (isset($_SESSION['PERMISOS']) && ($_SESSION['PERMISOS'] == 1)){
        $id = $params[':ID'];
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
        $descripcion = $_POST['descripcion'];
        $id = $_POST['idarma'];

        if (empty($nombre) || empty($tipo)) {
            $this->showError('Faltan datos obligatorios');
            die();
        }

        $this->modelarmas->edit($id, $nombre, $tipo, $descripcion);

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
            $userlogin=$this->userhelper->checkUserLogin();
            $admincomment=$this->userhelper->checkAdminLoginComment();
            if(!($skinarma)) {
                $this->showError('Skin no encontrada');
            }
            else {
                $this->view->showSkin($tipo, $armas, $skinarma, $adminlog,$userlogin,$admincomment);
            }
        }
        else {
            $this->showError('No tienes acceso a esta seccion');
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
                $this->showError('Faltan datos obligatorios');
                die();
            }
            if($_FILES['input_image']['type'] == "image/jpg" || $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] == "image/png" ){
                $imagename= $this->uniqueSaveName($_FILES['input_image']['name'],$_FILES['input_image']['tmp_name']);
                $this->modelskins->edit($id, $nombre, $idarma, $tipo, $estado, $stattrak, $precio, $coleccion,$imagename);
            }else{
                $this->modelskins->edit($id, $nombre, $idarma, $tipo, $estado, $stattrak, $precio, $coleccion);
            }
            header("Location: " . BASE_URL ."comprar"."/"."$id");
        }
        else
        {
            $this->showError('No tienes acceso a esta seccion');
        }
    }

    function deleteimage($params=null){
        $idskin=$params[':ID'];
        $skin=$this->modelskins->getSkin($idskin);
        $this->modelskins->removeimg($skin->id,$skin->nombre, $skin->id_arma, $skin->tipo,$skin->estado,$skin->stattrak,$skin->precio,$skin->coleccion);
        header("Location: " . BASE_URL ."editar"."/"."$idskin");
    }

    function editPermisos(){
        $id = $_POST['iduser'];
        $permiso = $_POST['permiso'];
        if ($id == 2){
            $this->showError('No se puede cambiar los permisos del usuario Admin');
        }else{
        $this->modeluser->updatepermiso($id, $permiso);
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
            $this->modelcomentarios->deletecoments($id);
            $this->modeluser->deleteuser($id);
    
            header("Location: " . BASE_URL ."admin");}
            else{
                $this->showError('No tienes acceso a esta seccion');
            }
    }
    
}