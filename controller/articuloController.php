<?php


    require_once 'model/articuloModel.php';

class articuloController {
    
    private $model;
    
    function __construct() {
        $this->model = new articuloModel();
    }
    
    //SECCION PARA FUNCIONES DE ARTICULOS - AGREGAR - EDITAR - BUSCAR - ELIMINAR - MODIFICAR - LISTAR ORDENES DE COMPRA
    
     public function listar(){
         
         $articulos = $this->model->listarArticulos();
         require_once 'view/include/header.php';
         require_once 'view/articulo/listar.php';
         require_once 'view/include/footer.php';
     }
      
    
        public function mostrarRegistarArticulo(){
         require_once 'view/include/header.php';
         require_once 'view/articulo/crear.php';
         require_once 'view/include/footer.php';         
     }
     
     public function registrar(){
         //1. Obtener todos los datos del formulario por $_POST

         $idartesano = $_SESSION['id'];
         $codigo = $_POST['codigo'];
         $nombre = $_POST['nombre'];
         $descripcion = $_POST['descripcion'];
         $categoria = $_POST['categoria'];
         $precio = $_POST['precio'];
         $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
         $estado = $_POST['estado'];
         
         
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $articulo = new articulos(0,$codigo,$nombre,$descripcion,$categoria,$precio,$imagen,$estado,$idartesano);  
         
         //3. llamar al modelo para registar un Estudiante
         $this->model->registrarArticulo($articulo);
         
         //4. redirección index.    
         $mensaje= "El Articulo Se Ha Registrado De Manera Correcta!";
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
           
         $idartesano = $_SESSION['id'];      
         $id = $_POST['id'];
                $codigo = $_POST['codigo'];
                $nombrearticulo = $_POST['nombrearticulo'];
                $descripcion = $_POST['descripcion'];
                $categoria = $_POST['categoria'];
                $precio = $_POST['precio'];
                $imagen = $_POST['imagen'];
                $estado = $_POST['estado'];
         
         
         //2. Crear un objeto articulo y enviar a actualizar
         $articulo = new articulos($id,$codigo,$nombrearticulo,$descripcion,$categoria,$precio,$imagen,$estado,$idartesano);         
         
         //3. llamar al modelo para guarde los cambios
         $this->model->actualizar($articulo);
         
         //4. redirección index.    
         header("location:index.php");
     }
     
     
     public function eliminaArticulo(){
            $id = $_GET['id'];
            
            
       //2. Crear un objeto 
         $articulo = new articulos($id,'','','','','','','','');  
         
       //3. llamar al modelo para que elimine
         $this->model->eliminarArticulo($articulo);
         
         //4. redirección index.    
         header("location:index.php");
     
     }
     
     
     
     public function mostrarBuscar(){
        $articulos = $this->model->listarArticulos();
         require_once 'view/include/header.php';
         require_once 'view/articulo/buscar.php';
         require_once 'view/include/footer.php';         
     }
     
     public function busqueda(){
         //1. obtener la busqueda del $_POST
         $busqueda = $_POST['busqueda'];
         //2. usar el modelo para traer de la BD el usuario
         $articulos = $this->model->buscaArticulo($busqueda);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/articulo/buscar.php';
         require_once 'view/include/footer.php';
        
     }
     

}


    