<?php

include_once "app/views/section.view.php";
include_once "app/views/product.view.php";
include_once "app/models/product.model.php";
include_once "app/models/categorie.model.php";
include_once "app/helpers/auth.helper.php";

class SectionController{

    private $categorieModel;
    private $view;
    private $productModel;
    private $productView;
    private $authHelper;

    // CONSTRUCTOR
    public function __construct(){
        $this->categorieModel = new CategorieModel();
        $this->view = new SectionView();
        $this->productView = new ProductView();
        $this->productModel = new ProductModel();

        // barrera de seguridad
        $this->authHelper = new AuthHelper();

    }

    public function Home(){
        session_start();
        $this->view->showHome();
    }

    public function menSection(){
        session_start();
        $this->view->showMen();
    }
    
    public function womenSection(){
        session_start();
        $this->view->showWomen();
    }

    // STORE
    public function Store($categ_name = NULL, $type = NULL){
        $categ = NULL;
        $categories = $this->categorieModel->getCategories();
        if($categ_name != ""){
            $categ = $this->categorieModel->getCategorieByName($categ_name);
        } 
        $products = $this->productModel->getProducts();
        $this->productView->showProducts($products, $categ, $type, $categories, $this->authHelper->validateAdmin());
    }

}