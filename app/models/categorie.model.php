<?php

class CategorieModel{

    private $db;

    //CONECT TO DATABASE
    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_hoodies; charset=utf8', 'root', '');
        return $db;
    }

    // GET ALL CATEGORIES
    public function getCategories(){
                  
        $db = $this->connect();

        // 2. Ejecutar la consulta SQL
        $query = $db->prepare('SELECT * FROM categorias');
        $query->execute();
        
        // 3. Obtener los datos de la consulta
        $categories = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los elementos
        
        return $categories;
    }

    // GET THE CATEGORIE BY GIVEN NAME
    public function getCategorieByName($name){
        $db = $this->connect();

        $query = $db->prepare("SELECT * FROM `categorias` WHERE `nombre` LIKE '$name'");
        $query->execute();
        $categoria = $query->fetch(PDO::FETCH_OBJ); //devuelve un arreglo con todos los elementos
    
        return $categoria;
    }

    // GET THE CATEGORIE BY AN ID
    public function getCategorieById($id){
        $db = $this->connect();

        $query = $db->prepare("SELECT * FROM `categorias` WHERE `id_categoria` LIKE '$id'");
        $query->execute();
        $categoria = $query->fetch(PDO::FETCH_OBJ); //devuelve un arreglo con todos los elementos
    
        return $categoria;
    }

    public function updateCategorie($id, $name){
        $db = $this->connect();

        $categorie = $this->getCategorieById($id);

        $sql = $db->prepare("UPDATE `categorias` SET `id_categoria` = '$id', `nombre` = '$name' WHERE `categorias`.`id_categoria` = '$id'");
        $sql->execute();
        return;

    }

    function deleteCategorie($id){
        $db = $this->connect();
        $sql = $db->prepare("DELETE FROM categorias WHERE `categorias`.`id_categoria` = $id");
        $sql->execute();
        return;
    }

    // INSERTS A NEW CATEGORIE
    function newCategorie($name){
        $db = $this->connect();
        $sql = $db->prepare("INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES (NULL, '$name');");
        $sql->execute();
        return;
    }

}