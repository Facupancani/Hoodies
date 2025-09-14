<?php

include_once "app/controllers/task.controller.php";
include_once "app/controllers/auth.controller.php";
require_once('libs/Smarty.class.php');

$taskController = new taskController;



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login':
        $authController = new authController;
        $authController->showLoginForm();
        break;
    case 'checkLog':
        $authController = new authController;
        $authController->checkLog();
        break;
    case 'checkRegister':
        $authController = new authController;
        $authController->checkRegister();
        break;
    case 'logout':
        $authController = new authController;
        $authController->logout();
        break;

    case 'home': 
        $taskController->Home(); 
        break;
    case 'men':
        $taskController->menSection(); 
        break;
    case 'women':
        $taskController->womenSection(); 
        break;
    case 'store': 
        echo "Store";
        if(isset($params[2])) $taskController->Store($params[1], $params[2]); 
        elseif(isset($params[1])) $taskController->Store($params[1]);
        else $taskController->Store();
        break;
    case 'getLoad':
        $taskController->showProductForm("Cargar producto", "load", $params[1] = null);
        break;
    case 'load':
        $taskController->insertProduct();
        break;
    case 'getEdit':
        $taskController->showProductForm("Cargar producto", "edit/$params[1]", $params[1]);
        break;
    case 'edit':
        $taskController->editProduct($params[1]);
        break;
    case 'delete':
        $taskController->deleteProduct($params[1]);
        break;
    case 'show':
        $taskController->showItem($params[1]);
        break;
    case 'newCategorie':
        $taskController->showCategorieForm("addCategorie");
        break;
    case 'addCategorie':
        $taskController->addCategorie();
        break;
    case 'categorias':
        $taskController->showCategorieList();
        break;
    case 'editCategorie':
        $taskController->showCategorieForm("updateCategorie/$params[1]", $params[1]);
        break;
    case 'updateCategorie':
        $taskController->updateCategorie($params[1]);
        break;
    case 'deleteCategorie':
        $taskController->deleteCategorie($params[1]);
        break;
    default: 
        echo('404 Page not found'); 
        break;
}