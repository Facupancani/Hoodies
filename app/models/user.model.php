<?php

class UserModel{

    private $db;

    //CONECT TO DATABASE
    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_hoodies; charset=utf8', 'root', '');
        return $db;
    }

        // REGISTER
        function register($name, $password){
            $db = $this->connect();
            $sql = $db->prepare("INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`) VALUES (NULL, '$name', '$password')");
            $sql->execute();
            return;
        }
    
        // RETURNS A USER BY A GIVEN USERNAME
        function getUser($username){
            $db = $this->connect();
            $sql = $db->prepare("SELECT * FROM `usuarios` WHERE nombre = '$username'");
            $sql->execute();
            return $sql->fetch(PDO::FETCH_OBJ);
        }
    

}