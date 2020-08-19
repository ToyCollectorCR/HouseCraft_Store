<?php
require_once 'baseDatos/conexion.php';
require_once 'usuarios.php';

class usuariosModel {
    
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();      
    }
    
    public function login($correo, $password){
        
        $this->bd->getConeccion();
        
        $sql="SELECT * FROM usuarios WHERE CORREO ='$correo'";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();

        if($registros !=null){
            if(password_verify($password,$registros[0]['password'])){
            
            $id   = $registros[0]['id'];
            $codigo   = $registros[0]['codigo'];
            $password = $registros[0]['password'];
            $nombre   = $registros[0]['nombre'];
            $apellido   = $registros[0]['apellido'];
            $correo   = $registros[0]['correo'];
            $telefono   = $registros[0]['telefono']; 
            $fechaingreso   = $registros[0]['fechaingreso'];
            $tipo   = $registros[0]['tipo'];
            $estado   = $registros[0]['estado'];
            
            $usuario = new usuarios($id,$codigo,$password,$nombre,$apellido,$correo,$telefono,$fechaingreso,$tipo,$estado);
            return $usuario; 
           
            }else{
              return null; 
            }

        }else{
              
        }         
        
    }
    
    
     public function registrarUsuario($usuario){
        $this->bd->getConeccion();
        $sql="INSERT INTO usuarios (codigo,password,nombre,apellido,correo,telefono,fechaingreso,tipo,estado) VALUES (?,?,?,?,?,?,?,?,?)";
        $paramType= 'sssssisss';
        $paramValue= array(
                           $usuario->getCodigo(),
                           $usuario->getPassword(),
                           $usuario->getNombre(),
                           $usuario->getApellido(),
                           $usuario->getCorreo(),
                           $usuario->getTelefono(),
                           $usuario->getFechaingreso(),
                           $usuario->getTipo(),
                           $usuario->getEstado());

        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);         
        $this->bd->cerrarConeccion();
    }    
    
    public function listarUsuarios(){
        $usuarios = array();
        $this->bd->getConeccion();        
        $sql="SELECT * FROM usuarios";        
        $registros = $this->bd->executeQueryReturnData($sql);                
        $this->bd->cerrarConeccion();
        
        foreach($registros as $row) {
            $usuario = new usuarios($row['id'],$row['codigo'],$row['password'],$row['nombre'],$row['apellido'],$row['correo'],$row['telefono'],$row['fechaingreso'],$row['tipo'],$row['estado']); 
            array_push($usuarios, $usuario);
        }
        
        return $usuarios;
    }
    
    
    
        public function listarUsuariosID($id){
        $usuarios = array();
        $this->bd->getConeccion();        
        $sql="SELECT * FROM usuarios WHERE ID = $id";        
        $registros = $this->bd->executeQueryReturnData($sql);                
        $this->bd->cerrarConeccion();
        
        foreach($registros as $row) {
            $usuario = new usuarios($row['id'],$row['codigo'],$row['password'],$row['nombre'],$row['apellido'],$row['correo'],$row['telefono'],$row['fechaingreso'],$row['tipo'],$row['estado']); 
            array_push($usuarios, $usuario);
        }
        
        return $usuarios;
    }
    
    
    
    
    
    
    public function usuarioBuscar($id){
        $this->bd->getConeccion();
        $sql="SELECT * FROM usuarios WHERE ID = $id";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();
        
        if($registros !=null){
            $id = $registros[0]['id'];
            $codigo = $registros[0]['codigo'];
            $password = $registros[0]['password'];
            $nombre= $registros[0]['nombre'];
            $apellido= $registros[0]['apellido'];
            $correo= $registros[0]['correo'];
            $telefono= $registros[0]['telefono'];
            $fechaingreso= $registros[0]['fechaingreso'];
            $tipo= $registros[0]['tipo'];
            $estado= $registros[0]['estado'];
            
            $usuario = new usuarios($id,$codigo,$password,$nombre,$apellido,$correo,$telefono,$fechaingreso,$tipo,$estado);
            return $usuario;
        }else{
           return null;   
        }
    }
    
    function buscaUsuario($busqueda) {
        $this->bd->getConeccion();         
        $sql = "SELECT id, codigo, password, nombre , apellido , correo, telefono, fechaingreso, tipo, estado  FROM usuarios WHERE Match(nombre,apellido,tipo) Against ('$busqueda')";
        $registros = $this->bd->executeQueryReturnData($sql); 
        $usuarios =array();
        
        foreach ($registros as $posicion => $row){
            $usuario = new usuarios($row['id'],$row['codigo'],$row['password'],$row['nombre'],$row['apellido'],$row['correo'],$row['telefono'],$row['fechaingreso'],$row['tipo'],$row['estado']);
            array_push($usuarios, $usuario);
        }
        $this->bd->cerrarConeccion();       
        return $usuarios;
    } 
    
public function actualizar($usuario){
        $this->bd->getConeccion();        
        $sql="UPDATE usuarios SET CODIGO=?, PASSWORD=?, NOMBRE=?, APELLIDO=?, CORREO=?, TELEFONO=?, FECHAINGRESO=?, TIPO=?, ESTADO=? WHERE ID=?";
        $paramType= 'sssssisssi';
        $paramValue= array($usuario->getCodigo(),
                           $usuario->getPassword(),
                           $usuario->getNombre(),
                           $usuario->getApellido(),
                           $usuario->getCorreo(),
                           $usuario->getTelefono(),
                           $usuario->getFechaingreso(),
                           $usuario->getTipo(),
                           $usuario->getEstado(),
                           $usuario->getId());
        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);                
        $this->bd->cerrarConeccion();        
    }
    
    
    
}



