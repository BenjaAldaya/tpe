<?php

class UserHelper {
    public function __construct() {
    }

    /**
     * Barrera de seguridad para usuario logueado
     */
    function checkLogin() {
        //Detectamos la sesion, si esta activa o inactiva.
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
            $status=0; 
        }else{
            $status=1;
        }
        return $status;
    }   
    
    function logout() {
        //Funcion para desconectar al usuario de la sesion.
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }    

    function login($user) {
        //funcion para logearse.
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USER_NAME'] = $user->usuario;
        $_SESSION['PERMISOS'] = $user->administrador;
    }


}