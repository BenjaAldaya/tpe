<?php
include_once 'app/views/skin.view.php';
include_once 'app/models/user.model.php';
include_once 'app/helpers/user.helper.php';

class UserController {

    private $model;
    private $view;
    private $userHelper;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new SkinView();
        $this->userHelper = new UserHelper();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    public function loginUser() {
        $username = $_POST['user'];
        $password = $_POST['password'];

        // verifico campos obligatorios
        if (empty($username) || empty($password)) {
            // $this->view->showFormLogin("Faltan datos obligatorios");
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        // obtengo el usuario de la base de datos
        $user = $this->model->getUser($username);

        // si el usuario existe, y las contraseñas coinciden
        if ($user && password_verify($password, $user->password)) {
            
            // armo la sesion del usuario
            $this->userHelper->login($user);

            // redirigimos al listado
            header("Location: " . BASE_URL . 'admin'); 
            
        } else {
            $this->view->showError("Credenciales inválidas");
        }

    }
    function register() {
        $username = $_POST['user'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if (empty($username) || empty($password) || empty($email)) {
            // $this->view->showRegistro("Faltan datos obligatorios");
            $this->view->showError('Faltan datos obligatorios');
            die();
        }
    }

    function logout() {
        $this->userHelper->logout();
    }
}