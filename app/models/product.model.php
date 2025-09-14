<?php

class ProductModel{

    private $db;

    //CONECT TO DATABASE
    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_hoodies; charset=utf8', 'root', '');
        return $db;
    }


    // GET ALL PRODUCTS
    public function getProducts(){
                  
        $db = $this->connect();

        // 2. Ejecutar la consulta SQL
        $query = $db->prepare('SELECT * FROM producto');
        $query->execute();
        
        // 3. Obtener los datos de la consulta
        $hoodies = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los elementos
        
        return $hoodies;
    }


    //INSERT A PRODUCT IN THE DB
    public function insert($name, $price, $cat, $type, $img = null){
        
        $db = $this->connect();

        $pathImg = null;
        if($img){
            $pathImg = $this->uploadImage($img);
        }
          
        $sql = $db->prepare("INSERT INTO `producto` (`id`, `nombre`, `imagen`, `precio`, `tipo`, `id_categoria`) VALUES (NULL, '$name', '$pathImg', '$price', '$type', '$cat')");
        $sql->execute();
        return;
    }

    private function uploadImage($image){
        $target = 'images/products/' . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION)); 
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    // RETURNS A PRODUCT FROM AN ID
    public function getProductByID($id){

        //Hago la consulta a la base de datos con el id que quiero editar
        $db = $this->connect();
        $sql = $db->prepare("SELECT * FROM `producto` WHERE id = $id");
        $sql->execute();

        $product = $sql->fetch(PDO::FETCH_OBJ);
        return $product;
    }
    
    // EDITS A PRODUCT BY A GIVEN ID
    public function updateProduct($id , $name, $price, $categorie, $type, $img = null){
        $db = $this->connect();
        $pathImg = null;
        if($img){
            $pathImg = $this->uploadImage($img);
        }
        $sql = $db->prepare("UPDATE `producto` SET `nombre` = '$name', `precio` = '$price', `tipo` = '$type', `id_categoria` = '$categorie' WHERE `producto`.`id` = '$id'");
        $sql->execute();
        return;
    }

    // DELETES A PRODUCT
    public function delete($id){
        $db = $this->connect();
        $sql = $db->prepare("DELETE FROM producto WHERE `producto`.`id` = $id");
        $sql->execute();
        return;
    }

    

}