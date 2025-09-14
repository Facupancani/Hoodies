<?php

class AuthHelper {

    /**
     * Verifica que el user este logueado como administrador
     * retorna true si lo esta y false si no lo esta
     */
    public function validateAdmin(){
        if (isset($_SESSION['name']) == false) {
            session_start();
        }
        if(isset($_SESSION['name']) && $_SESSION['logged'] = true && $_SESSION['name'] == "Admin"){
            return true;
        }else return false;
    }
}
