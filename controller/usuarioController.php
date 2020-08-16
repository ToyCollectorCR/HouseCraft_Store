<?php

require_once 'model/usuariosModel.php';

class usuarioController {
   
      private $model;
    
    function __construct() {
        $this->model = new usuariosModel();
    }
    
    public function login(){
        //1. Obtener los datos de $_POST
         $correo   = $_POST['correo'];
         $password = $_POST['password'];

         //2. llamar al modelo para evaluar
         $usuario = $this->model->login($correo, $password);
         
        //3. depediendo del resultado redireccionar a index o al login        
         if($usuario != null){
         $_SESSION['usuarioLogueado'] = $usuario;
           header("location:index.php"); 
           
         }else{
              
           header("location:index.php?controller=usuario&action=mostrarLogin");    
         }
    }
    
    public function mostrarLogin(){
        require_once 'view/include/header.php';
        require_once 'view/usuario/login.php';
        require_once 'view/include/footer.php';
    }
    
    
    public function cerrarSesion(){        
        session_destroy();
        header("location:index.php");        
    }
    
    
    
    
     public function listar(){         
         $usuarios = $this->model->listarUsuarios();
         require_once 'view/include/header.php';
         require_once 'view/usuario/listar.php';
         require_once 'view/include/footer.php';
     }
     

     
     public function mostrarBuscar(){
         $usuarios = $this->model->listarUsuarios();
         require_once 'view/include/header.php';
         require_once 'view/usuario/buscar.php';
         require_once 'view/include/footer.php';         
     }
     
     public function busqueda(){
         //1. obtener la busqueda del $_POST
         $busqueda = $_POST['busqueda'];
         //2. usar el modelo para traer de la BD el usuario
         $usuarios = $this->model->buscaUsuario($busqueda);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/usuario/buscar.php';
         require_once 'view/include/footer.php';
        
     }
     
     
     
     
     
     public function buscar(){
         $usuarios = $this->model->listarUsuarios();
         require_once 'view/include/header.php';
         require_once 'view/usuario/listar.php';
         require_once 'view/include/footer.php';
         
     }
     
     
     
     
     public function mostrarRegistar(){
         require_once 'view/include/header.php';
         require_once 'view/usuario/crear.php';
         require_once 'view/include/footer.php';         
     }
     
     public function registrar(){
         //1. Obtener todos los datos del formulario por $_POST
         
         $codigo = $_POST['codigo'];
         $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $correo = $_POST['correo'];
         $telefono = $_POST['telefono'];
         $fechaingreso = $_POST['fechaingreso'];
         $tipo = $_POST['tipo'];
         $estado = $_POST['estado'];
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $usuarios = new usuarios(0,$codigo,$password,$nombre,$apellido,$correo,$telefono,$fechaingreso,$tipo,$estado);  
         
         //3. llamar al modelo para registar un Estudiante
         $this->model->registrarUsuario($usuarios);
         
         //4. redirección index.    
         $mensaje= "Usuario Registrado de Manera Correcta!";
         Util::mostarAlerta($mensaje);
     }

     
     public function editar(){
         //1. obtener la cedula del $_GET
         $id = $_GET['id'];
         //2. usar el modelo para traer de la BD el estudiante
         $usuario = $this->model->usuarioBuscar($id);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/usuario/editar.php';
         require_once 'view/include/footer.php';
     }
     
     
     
     public function guardarCambios(){
         //1. Obtener todos los datos del formulario por $_POST
          
         $id = $_POST['id'];
         $codigo = $_POST['codigo'];
         $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $correo = $_POST['correo'];
         $telefono = $_POST['telefono'];
         $fechaingreso = $_POST['fechaingreso'];
         $tipo = $_POST['tipo'];
         $estado = $_POST['estado'];
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $usuario = new usuarios($id,$codigo,$password,$nombre,$apellido,$correo,$telefono,$fechaingreso,$tipo,$estado);         
         
         //3. llamar al modelo para guarde los cambios
         $this->model->actualizar($usuario);
         
         //4. redirección index.    
         header("location:index.php");
     }
    
    
    
}
