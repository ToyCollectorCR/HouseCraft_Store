<?php

require_once 'model/comprasModel.php';


class comprasController {
    
    private $model;
    
    function __construct() {
        $this->model = new comprasModel();
    }
    
     public function comprar(){
         //1. obtener la cedula del $_GET
         $id = $_GET['id'];
         //2. usar el modelo para traer de la BD
         $articulo = $this->model->buscarArticulo($id);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/articulo/comprar.php';
         require_once 'view/include/footer.php';
     }
     
     public function guardarCompra(){
         //1. Obtener todos los datos del formulario por $_POST
           
                $idartesano = $_SESSION['id'];      
                
                $id  = $_POST['id'];
                $nombrecomprador  = $_POST['nombrecomprador'];
                $telefono  = $_POST['telefono'];
                $direccion  = $_POST['direccion'];
                $tc  = $_POST['tc'];
                $nombrearticulo  = $_POST['nombrearticulo'];
                $descripcion  = $_POST['descripcion'];
                $precio  = $_POST['precio'];
                
         
         
         //2. Crear un objeto articulo y enviar a actualizar
         $compra = new compras($id,$nombrecomprador,$telefono,$direccion,$tc,$nombrearticulo,$descripcion,$precio,$idartesano);         
         
         //3. llamar al modelo para guarde los cambios
         $this->model->comprarArticulo($compra);
         
         //4. redirección index.    
         header("location:index.php");

     }
    
}

