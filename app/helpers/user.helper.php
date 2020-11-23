<?php

class UserHelper {
    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    /**
     * Barrera de seguridad para usuario logueado
     */
    function checkAdminLogin() {
        //Detectamos la sesion, si esta activa o inactiva.
        ;
        if (!isset($_SESSION['ID_USER'])) {
            if (!isset($_SESSION['PERMISOS']) && !($_SESSION['PERMISOS'] == 3)){
                header("Location: " . BASE_URL);
                die();
            }
        }
    }   
    
    function logout() {
        //Funcion para desconectar al usuario de la sesion.
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }    

    function login($user) {
        //funcion para logearse
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USER_NAME'] = $user->usuario;
        $_SESSION['PERMISOS'] = $user->administrador;
    }


}