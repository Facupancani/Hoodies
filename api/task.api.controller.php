<?php
require_once("./app/models/task.model.php");
require_once("./api/api.view.php");

class TaskApiController {

    private $model;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new APIview();
        $this->data = file_get_contents("php://input");
    }
    
    private function getData() {
        return json_decode($this->data);
    }

    // GETERS
    
    public function  getProducts($params = null) {
        $tareas = $this->model->getProducts($_GET); 
        $this->view->response($tareas, 200);
    }
    
    public function getproduct($params = null) {
        $id = $params[':ID'];
        var_dump($params);
        
        $tarea = $this->model->getProductByID($id);        
        if ($tarea)
        $this->view->response($tarea, 200);
        else
        $this->view->response("La tarea con el id={$id} no existe", 404);
        echo "$id";
    } 




    // DELETE
    
    public function deleteProduct($params = null) {
        $id = $params[':ID'];
        $tarea = $this->model->getProductByID($id);
        if ($tarea) {
            $this->model->delete($id);
            $this->view->response("La tarea fue borrada con exito.", 200);
        } else
        $this->view->response("La tarea con el id={$id} no existe", 404);
    }
    



    // PUSH
    
    public function addProduct($params = null) {
        $data = $this->getData();

        $id = $this->model->insert($data->nombre, $data->precio, $data->id_categoria, $data->tipo, $data->imagen);
        
        $product = $this->model->getProductByID($id);
        if ($product)
            $this->view->response($product, 200);
        else
            $this->view->response("La tarea no fue creada", 500);

    }


    // PUT


    public function updateProduct($params = null) {
        $id = $params[':ID'];
        $data = $this->getData();
        
        $producto = $this->model->getProductByID($id);
        if ($producto) {
            $this->model->updateProduct($id, $data->nombre, $data->precio, $data->id_categoria, $data->tipo, $data->imagen);
            $this->view->response("El producto se ha modificado con exito", 200);
        } else
            $this->view->response("El producto con el id={$id} no existe", 404);
    }

}
