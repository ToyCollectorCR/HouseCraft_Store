<?php


    require_once 'model/articuloModel.php';

class articuloController {
    
    private $model;
    
    function __construct() {
        $this->model = new articuloModel();
    }
    
     public function listar(){
         
         $articulos = $this->model->listarArticulos();
         require_once 'view/include/header.php';
         require_once 'view/articulo/listar.php';
         require_once 'view/include/footer.php';
     }
     
     
     public function mostrarRegistar(){
         require_once 'view/include/header.php';
         require_once 'view/estudiante/crear.php';
         require_once 'view/include/footer.php';         
     }
     
     public function registrar(){
         //1. Obtener todos los datos del formulario por $_POST
         $cedula = $_POST['cedula'];
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $edad = $_POST['edad'];
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $estudiante = new Estudiante($cedula,$nombre,$apellido,$edad);  
         
         //3. llamar al modelo para registar un Estudiante
         $this->model->registrarEstudiante($estudiante);
         
         //4. redirección index.    
         $mensaje= "El estudiante fue registrado de manera correcta!";
         Util::mostarAlerta($mensaje);
     }
     
     public function editar(){
         //1. obtener la cedula del $_GET
         $id = $_GET['id'];
         //2. usar el modelo para traer de la BD el estudiante
         $articulo = $this->model->buscarArticulo($id);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/articulo/editar.php';
         require_once 'view/include/footer.php';
     }
     
     public function guardarCambios(){
         //1. Obtener todos los datos del formulario por $_POST
           
                $id = $_POST['id'];
                $codigo = $_POST['codigo'];
                $nombrearticulo = $_POST['nombrearticulo'];
                $descripcion = $_POST['descripcion'];
                $categoria = $_POST['categoria'];
                $precio = $_POST['precio'];
                $imagen = $_POST['imagen'];
                $estado = $_POST['estado'];
         
         
         //2. Crear un objeto articulo y enviar a actualizar
         $articulo = new articulos($id,$codigo,$nombrearticulo,$descripcion,$categoria,$precio,$imagen,$estado);         
         
         //3. llamar al modelo para guarde los cambios
         $this->model->actualizar($articulo);
         
         //4. redirección index.    
         header("location:index.php");
     }

}


    