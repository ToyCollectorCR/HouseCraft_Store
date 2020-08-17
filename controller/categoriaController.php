<?php

require_once 'model/categoriaModel.php';

class categoriaController {
    
    private $model;
    
    function __construct() {
        $this->model = new categoriaModel();
    }
    
    
        public function mostrarRegistarCategoria(){
         require_once 'view/include/header.php';
         require_once 'view/categorias/crear.php';
         require_once 'view/include/footer.php';         
     }
     
     public function registrar(){
         //1. Obtener todos los datos del formulario por $_POST

         $codigo = $_POST['codigo'];
         $descripcion = $_POST['descripcion'];
         $fechacreacion = $_POST['fechacreacion'];
        
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $categoria = new categoria(0,$codigo,$descripcion,$fechacreacion);  
         
         //3. llamar al modelo para registar un Estudiante
         $this->model->registrarCategoria($categoria);
         
         //4. redirección index.    
         $mensaje= "Has Registrado Una Nueva Categoria de Manera Exitosa!";
         Util::mostarAlerta($mensaje);
     }
     
     
        public function listar(){         
         $categorias = $this->model->listarCategoria();
         require_once 'view/include/header.php';
         require_once 'view/categorias/listar.php';
         require_once 'view/include/footer.php';
     }
    
     
     public function editar(){
         //1. obtener la cedula del $_GET
         $id = $_GET['id'];
         //2. usar el modelo para traer de la BD la Categoria
         $categoria = $this->model->categoriaBuscar($id);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/categorias/editar.php';
         require_once 'view/include/footer.php';
     }
     
     public function guardarCambios(){
         //1. Obtener todos los datos del formulario por $_POST
          
         $id = $_POST['id'];
         $codigo = $_POST['codigo'];
         $descripcion = $_POST['descripcion'];
         $fechacreacion = $_POST['fechacreacion'];
        
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $categoria = new categoria($id,$codigo,$descripcion,$fechacreacion);         
         
         //3. llamar al modelo para guarde los cambios
         $this->model->actualizar($categoria);
         
         //4. redirección index.    
         header("location:index.php");
     }
     
     
     public function eliminaCategoria(){
            $id = $_GET['id'];
            
            
       //2. Crear un objeto 
         $categoria = new categoria($id,'','','');  
         
       //3. llamar al modelo para que elimine
         $this->model->eliminarCategoria($categoria);
         
         //4. redirección index.    
         header("location:index.php");

  }
    
}

