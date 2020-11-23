<?php
include_once 'app/views/skin.view.php';
include_once 'app/models/user.model.php';
include_once 'app/helpers/user.helper.php';
include_once 'app/controllers/skin.controller.php';

class UserController {

    private $model;
    private $view;
    private $userHelper;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new SkinView();
        $this->userHelper = new UserHelper();
        $this->skinController = new SkinController();
    }

    function showLogin($error=null){
        // Controlador llama a la visual para poder logearse.
        $this->view->showLogin($error);
    }

    function showRegistro($error=null){
        // Funcion para mostrar la pagina de registro.
        $this->view->showRegistro($error);
    }

    public function loginUser() {
        $username = $_POST['user'];
        $password = $_POST['password'];

        // verifico campos obligatorios
        if (empty($username) || empty($password)) {
            // $this->view->showFormLogin("Faltan datos obligatorios");
            $this->view->showLogin('Faltan datos obligatorios');
            die();
        }

        // obtengo el usuario de la base de datos
        $user = $this->model->getUser($username);

        // si el usuario existe, y las contraseñas coinciden
        if ($user && password_verify($password, $user->pass)) {
            
            // armo la sesion del usuario
            $this->userHelper->login($user);

            if (($_SESSION['PERMISOS'] == 1)){
                header("Location: " . BASE_URL . 'admin'); 
            }else{
                header("Location: " . BASE_URL); 
            }            
            
        } else {
            $this->showLogin("Usuario y contraseña invalido");
        }

    }
    function registrer() {
        //funcion para registrar
        // aunque aun no la estamos utilizando
        $username = $_POST['user'];
        $password = $_POST['password'];
        $spassword= $_POST['repeatpassword'];
        $email = $_POST['email'];

        if (empty($username) || empty($password) || empty($spassword) | empty($email )) {
            // $this->view->showRegistro("Faltan datos obligatorios");
            $this->view->showRegistro('Faltan datos obligatorios.');
            die();
        }
        if ($password != $spassword){
            $this->view->showRegistro('Las contraseñas no son iguales.');
            die();
        }   
        //busco si existe el usuario
        $userrepeat = $this->model->getUser($username);
        //busco si existe el email
        $emailrepeat = $this->model->getEmail($email);
        if($userrepeat){
            $this->view->showRegistro('Ya existe un usuario con ese nombre.');
            die();
        }else if($emailrepeat){  
            $this->view->showRegistro('Ya existe un usuario con ese email.');
            die();
          
        }else{//si no existe ninguno de los 2 registro y logeo la cuenta
            $passhash= password_hash($password,PASSWORD_DEFAULT);
            $this->model->registrer($username,$passhash,$email);
            $user = $this->model->getUser($username);
            $this->userHelper->login($user);
            header("Location: " . BASE_URL); 
        }
    }

    function logout() {
        $this->userHelper->logout();
    }
}