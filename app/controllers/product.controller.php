<?php

include_once "app/views/product.view.php";
include_once "app/models/product.model.php";
include_once "app/helpers/auth.helper.php";

class ProductController{

    private $model;
    private $view;
    private $authHelper;

    // CONSTRUCTOR
    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();

        // barrera de seguridad
        $this->authHelper = new AuthHelper();

    }
    

    // PRODUCT
    public function showItem($id){
        $product = $this->model->getProductByID($id);
        if(isset($product)){
            $this->view->showItem($product, $this->authHelper->validateAdmin());
        }else echo "no se encontro el producto";
    }

    // MUESTRA EL FORM PARA AÑADIR LOS DATOS DEL PRODUCTO, EL FORMULARIO ENVIA UNA ACCION DEPENDIENDO LA INDICADA EN EL ROUTER
    public function showProductForm($title, $action, $id = null){
        if($this->authHelper->validateAdmin()){
            if(isset($id)){
                $product = $this->model->getProductByID($id);
                $this->view->showProductForm($title, $action, $product);
            }else $this->view->showProductForm($title, $action);
        }
    }

    // INSERT A NEW PRODUCT
    public function insertProduct(){
        if($this->authHelper->validateAdmin()){

            $name = $_POST["name"];
            $price = $_POST["price"];
            $cat = $_POST["categorie"];
            $type = $_POST["Type"];
            
            if (!empty($name) && !empty($price) && !empty($cat)) {
                $agregar = true;
            }else{
                $agregar = false;
            }
            
            if($agregar){
                
                if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
                    $this->model->insert($name, $price, $cat, $type, $_FILES['input_name']);
                }
                else {
                    $this->model->insert($name, $price, $cat, $type, '');
                }
            }
            
        }
            header("Location: http://localhost/Hoodies/" . "home");
            return;
    }
    
    
    
    // EDIT PRODUCT
    public function editProduct($id){
        if($this->authHelper->validateAdmin() == true){

            
            $name = $_POST["name"];
            $price = $_POST["price"];
            $cat = $_POST["categorie"];
            $type = $_POST["Type"];

            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
                $this->model->updateProduct($id, $name, $price, $cat, $type, $_FILES['input_name']);
            }
            else {
                $this->model->updateProduct($id, $name, $price, $cat, $type, '');
            }
        }
        
        header("Location: http://localhost/Hoodies/" . "store/");
        return;
    }
       
    // DELETE PRODUCT  
    public function deleteProduct($id){
        if($this->authHelper->validateAdmin() == true){
            $this->model->delete($id);
        }
        header("Location: http://localhost/Hoodies/" . "home");
        return;
    }

    
}