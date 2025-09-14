<?php
    require_once('./libs/Router.php');
    require_once('./api/task.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("/productos", "GET", "TaskApiController", "getProducts");
    $router->addRoute("/productos/:ID", "GET", "TaskApiController", "getProduct");
    $router->addRoute("/productos/:ID", "DELETE", "TaskApiController", "deleteProduct");
    $router->addRoute("/productos", "POST", "TaskApiController", "addProduct");
    $router->addRoute("/productos/:ID", "PUT", "TaskApiController", "updateProduct");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
