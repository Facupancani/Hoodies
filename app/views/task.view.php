<?php

class TaskView{
    

    // HOME

    function showHome() {
        include_once "templates/header.tpl";
        include_once "templates/home.tpl";
        include_once "templates/footer.tpl";
    }

    function showMen(){
        include_once "templates/header.tpl";
        include_once "templates/men.tpl";
        include_once "templates/footer.tpl";
    }
    function showWomen(){
        include_once "templates/header.tpl";
        include_once "templates/women.tpl";
        include_once "templates/footer.tpl";
    }


    // PRODUCTOS

    function showProducts($products, $categ, $type, $categories, $esAdmin){
        include_once "templates/header.tpl";
        $smarty = new Smarty();
        $smarty->assign('categories', $categories);
        $smarty->display('templates/categorieNav.tpl');

        // BARRA DE DIRECCIONES DE PRODUCTOS Y TIENDA
        $directions = new Smarty();
        $store = new Smarty();

        //ASIGNO VALORES SI EXISTE LA CATEGORIA
        if(isset($categ)){
            $directions->assign('dispCat', TRUE);
            $directions->assign('nombre', $categ->nombre);

            $store->assign('dispCat', TRUE);
            $store->assign('idCat', $categ->id_categoria);

        }else{
            $directions->assign('dispCat', FALSE);
            $store->assign('dispCat', FALSE);
        } 

        //ASIGNO VALORES SI SE DA EL TIPO
        if(isset($type)){
            $directions->assign('dispType', TRUE);
            $directions->assign('type', $type);

            $store->assign('dispType', TRUE);
            $store->assign('type', $type);
            
        }else{
            $directions->assign('dispType', FALSE);
            $store->assign('dispType', FALSE);
        } 

        //DOY UN TRUE SI ES USUARIO ES ADMINISTRADOR
        if($esAdmin == true){
            $store->assign('admin', TRUE);
        }else $store->assign('admin', FALSE);
        $store->assign('products', $products);

        $directions->display('templates/direction.tpl'); 
        $store->display('templates/store.tpl'); 

        include_once "templates/footer.tpl";   
        return;
    }

    function showItem($product, $esAdmin){
        include_once "templates/header.tpl";

        $smarty = new Smarty();
        $smarty->assign('nombre', "$product->nombre");
        $smarty->assign('imagen', "$product->imagen");
        $smarty->assign('precio', "$product->precio");
        $smarty->assign('id', "$product->id");

        if ($esAdmin == true){
            $smarty->assign('admin', TRUE);
        }else $smarty->assign('admin', FALSE);
        
        $smarty->display('templates/product.tpl'); 

        include_once "templates/footer.tpl";
    }
    

    // CARGAR PRODUCTO
    function showProductForm($title, $action, $product = null){
        include_once "templates/header.tpl";
        $smarty = new Smarty();
        $smarty->assign('title', "$title");
        $smarty->assign('action', "$action");

        if(isset($product)){
            $smarty->assign('valName', "$product->nombre");
            $smarty->assign('valPrice', "$product->precio");
            $smarty->assign('valCat', "$product->id_categoria");
            $smarty->assign('valImg', "$product->imagen");
        }else{
            $smarty->assign('valName', "");
            $smarty->assign('valPrice', "");
            $smarty->assign('valCat', "");
            $smarty->assign('valImg', "");
        }
        $smarty->display('templates/productForm.tpl');  
        include_once "templates/footer.tpl"; 
    }

    // AÑADIR CATEGORIA
    function showcategoriesForm($action, $value = NULL){
        include_once "templates/header.tpl";
        $smarty = new Smarty();
        $smarty->assign('action', $action);
        $smarty->assign('value', $value);
        $smarty->display('templates/categorieForm.tpl');
        include_once "templates/footer.tpl"; 
    }

    // VER Y EDITAR CATEGORIAS
    function CategoriesList($categories){
        include_once "templates/header.tpl";
        $smarty = new Smarty();
        $smarty->assign('categories', $categories);
        $smarty->display('templates/categorieList.tpl');
        include_once "templates/footer.tpl"; 
    }
}