<?php

require_once 'baseDatos/conexion.php';
require_once 'categoria.php';

class categoriaModel {
    
     private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }
    
    
    public function registrarCategoria($categoria){
        $this->bd->getConeccion();
        $sql="INSERT INTO categorias(CODIGO,DESCRIPCION,FECHACREACION) VALUES (?,?,?)";
        $paramType= 'sss';
        $paramValue= array($categoria->getCodigo(),
                           $categoria->getDescripcion(),
                           $categoria->getFechacreacion());

        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);         
        $this->bd->cerrarConeccion();
    }    
    
    
    public function listarCategoria(){
        $categorias = array();
        $this->bd->getConeccion();        
        $sql="SELECT * FROM categorias";        
        $registros = $this->bd->executeQueryReturnData($sql);                
        $this->bd->cerrarConeccion();
        
        foreach($registros as $row) {
            $categoria = new categoria($row['id'],$row['codigo'],$row['descripcion'],$row['fechacreacion']); 
            array_push($categorias, $categoria);
        }
        
        return $categorias;
    }
    
     public function categoriaBuscar($id){
        $this->bd->getConeccion();
        $sql="SELECT * FROM categorias WHERE ID = $id";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();
        
        if($registros !=null){
            $id = $registros[0]['id'];
            $codigo = $registros[0]['codigo'];
            $descripcion = $registros[0]['descripcion'];
            $fechacreacion= $registros[0]['fechacreacion'];
            
            $categoria = new categoria($id,$codigo,$descripcion,$fechacreacion);
            return $categoria;
        }else{
           return null;   
        }
    }
    
    public function actualizar($categoria){
        $this->bd->getConeccion();        
        $sql="UPDATE categorias SET CODIGO=?, DESCRIPCION=?, FECHACREACION=? WHERE ID=?";
        $paramType= 'sssi';
        $paramValue= array($categoria->getCodigo(),
                           $categoria->getDescripcion(),
                           $categoria->getFechacreacion(),
                           $categoria->getId());
                           
        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);                
        $this->bd->cerrarConeccion();        
    }
    
    
    function eliminarCategoria($categoria) {
        $this->bd->getConeccion(); 
        $sql = "DELETE FROM categorias WHERE id = ?";
        $paramType = "i";
        $paramValue = array($categoria->getId());
        $this->bd->executeQuery($sql, $paramType, $paramValue);
        $this->bd->cerrarConeccion();
    }    
    
}
