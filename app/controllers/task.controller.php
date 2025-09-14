<?php

include_once "app/views/task.view.php";
include_once "app/models/task.model.php";
include_once "app/helpers/auth.helper.php";

class TaskController{

    private $model;
    private $view;
    private $authHelper;

    // CONSTRUCTOR
    public function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();

        // barrera de seguridad
        $this->authHelper = new AuthHelper();

    }
    

    // HOME
    public function Home(){
        session_start();
        $this->view->showHome();
    }

    // MEN SECTION
    public function menSection(){
        session_start();
        $this->view->showMen();
    }
    
    // WOMEN SECTION
    public function womenSection(){
        session_start();
        $this->view->showWomen();
    }

    // STORE
    public function Store($categ_name = NULL, $type = NULL){
        $categ = NULL;
        $categories = $this->model->getCategories();
        if($categ_name != ""){
            $categ = $this->model->getCategorieByName($categ_name);
        } 
        $products = $this->model->getProducts($categ, $type);
        $this->view->showProducts($products, $categ, $type, $categories, $this->authHelper->validateAdmin());
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
    
    //INSERT A NEW CATEGORIE
    function showCategorieForm($action, $id = NULL){
        if($this->authHelper->validateAdmin() == true){
            if(isset($id)){
                $categorie = $this->model->getCategorieById($id);    
                $this->view->showcategoriesForm($action, $categorie->nombre);
            }
            $this->view->showcategoriesForm($action);
        }else{
            header("Location: http://localhost/Hoodies/" . "home");
            return;
        }
    }

    function addCategorie(){
        if($this->authHelper->validateAdmin() == true){

            $name = $_POST["name"];
            $this->model->newCategorie($name);
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

    public function showCategorieList(){
        if($this->authHelper->validateAdmin() == true){
            $categories = $this->model->getCategories();
            $this->view->CategoriesList($categories);
        }else{ 
            header("Location: http://localhost/Hoodies/" . "home");
            return;
        }
    }

    function updateCategorie($id){
        if($this->authHelper->validateAdmin() == true){
            $name = $_POST["name"];
            $this->model->updateCategorie($id, $name);
        }
        header("Location: http://localhost/Hoodies/" . "home");
        return;
    }

    function deleteCategorie($id){
        if($this->authHelper->validateAdmin() == true){
            $this->model->deleteCategorie($id);
        }
        header("Location: http://localhost/Hoodies/" . "home");
        return;
        
    }
}