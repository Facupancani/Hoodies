<?php

class CategorieView{
    
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