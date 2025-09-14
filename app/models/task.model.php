<?php

class TaskModel{

    private $db;

    //CONECT TO DATABASE
    function connect(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_hoodies; charset=utf8', 'root', '');
        return $this->db;
    }




    // GET ALL PRODUCTS
   public function getProducts($categ = NULL, $type = NULL) {
        $db = $this->connect();

        $sql = "SELECT * FROM producto";
        $params = [];

        if ($categ) {
            $sql .= " WHERE id_categoria = ?";
            $params[] = $categ->id_categoria;
        }

        if ($type) {
            $sql .= $categ ? " AND tipo = ?" : " WHERE tipo = ?";
            $params[] = $type;
        }

        $query = $db->prepare($sql);
        $query->execute($params);

        return $query->fetchAll(PDO::FETCH_OBJ);
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



    //INSERT A PRODUCT IN THE DB
    public function insert($name, $price, $cat, $type, $img = null){
        
        $db = $this->connect();

        $pathImg = null;
        if($img){
            $pathImg = $this->uploadImage($img);
        }
          
        $sql = $db->prepare("INSERT INTO `producto` (`id`, `nombre`, `imagen`, `precio`, `tipo`, `id_categoria`) VALUES (NULL, '$name', '$pathImg', '$price', '$type', '$cat')");
        $sql->execute();
        return $db->lastInsertId();
    }

    private function uploadImage($image){
        $target = 'images/products/' . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION)); 
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }


    
    // EDITS A PRODUCT BY A GIVEN ID
    public function updateProduct($id , $name, $price, $categorie, $type, $img = null){
        $db = $this->connect();
        $pathImg = null;
        if($img){
            $pathImg = $this->uploadImage($img);
        }
        $sql = $db->prepare("UPDATE `producto` SET `nombre` = '$name', `imagen` = '$pathImg', `precio` = '$price', `tipo` = '$type', `id_categoria` = '$categorie' WHERE `producto`.`id` = '$id'");
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









    // INSERTS A NEW CATEGORIE
    function newCategorie($name){
        $db = $this->connect();
        $sql = $db->prepare("INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES (NULL, '$name');");
        $sql->execute();
        return;
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

}