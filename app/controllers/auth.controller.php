<?php

include_once "app/views/auth.view.php";
include_once "app/models/user.model.php";

class AuthController{

    private $model;
    private $view;

    // CONSTRUCTOR
    public function __construct(){
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    // LOGIN
    public function showLoginForm(){
        session_start();
        $this->view->showLoginForm();
        return;
    }

    public function checkLog(){
        //checkeo que se hayan ingresado los datos
        if(!empty($_POST["user"]) && !empty($_POST["password"])){

            
            $name = $_POST["user"];
            $password = $_POST["password"];

            //Busco si el usuario existe
            $user = $this->model->getUser($name);
            if($user){
                if(password_verify($password, $user->contraseña)){
                    //inicio la sesion
                    session_start();
                    $_SESSION["name"] = $name;
                    $_SESSION['logged'] = true;
                    header("Location: http://localhost/Hoodies/" . "home");
                    return;
                }else var_dump($user->contraseña, " no es igual a ", $password);

            }else if($user == NULL){
                echo "Usuario no encontrado";
                return;
            } 
        

        }var_dump("algo fallo!");
        return;
    }
    
    // REGISTER
    public function checkRegister(){
        //checkeo que se hayan ingresado los datos
        if(!empty($_POST["user"]) && !empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmPassword"])){
            
            $name = $_POST["user"];
            $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
            
            //chequeo que el usuario no existe
            if($this->model->getUser($name) == NULL){
                $this->model->register($name, $password);
                $this->checklog();
                header("Location: http://localhost/Hoodies/" . "home");
                return;
            }else{
                var_dump("ese nombre de usuario ya existe!");
            }

        }var_dump("algo fallo!");
        return;
    }

    //LOGOUT
    public function logout(){
        session_start();
        session_destroy();
        header("Location: http://localhost/Hoodies/" . "home");
    }
}