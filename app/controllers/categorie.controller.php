<?php

include_once "app/views/categorie.view.php";
include_once "app/models/categorie.model.php";
include_once "app/helpers/auth.helper.php";

class CategorieController{

    private $model;
    private $view;
    private $authHelper;

    // CONSTRUCTOR
    public function __construct(){
        $this->model = new CategorieModel();
        $this->view = new CategorieView();

        // barrera de seguridad
        $this->authHelper = new AuthHelper();

    }


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