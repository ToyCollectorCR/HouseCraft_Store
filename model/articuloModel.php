<?php

require_once 'baseDatos/conexion.php';
require_once 'articulos.php';

class articuloModel{
    
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }

    public function listarArticulos(){
        $articulos = array();
        $this->bd->getConeccion();        
        $sql="SELECT * FROM artículos";        
        $registros = $this->bd->executeQueryReturnData($sql);                
        $this->bd->cerrarConeccion();
        
        foreach($registros as $row) {
            $articulo = new articulos($row['id'],$row['codigo'],$row['nombrearticulo'],$row['descripcion'],$row['categoria'],$row['precio'],$row['imagen'],$row['estado']); 
            array_push($articulos, $articulo);
        }
        
        return $articulos;
    }
    
    public function buscarArticulo($id){
        $this->bd->getConeccion();
        $sql="SELECT * FROM artículos WHERE ID = $id";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();
        
        if($registros !=null){
            $id = $registros[0]['id'];
            $codigo = $registros[0]['codigo'];
            $nombrearticulo = $registros[0]['nombrearticulo'];
            $descripcion= $registros[0]['descripcion'];
            $categoria= $registros[0]['categoria'];
            $precio= $registros[0]['precio'];
            $imagen= $registros[0]['imagen'];
            $estado= $registros[0]['estado'];
            
            $articulo = new articulos($id,$codigo,$nombrearticulo,$descripcion,$categoria,$precio,$imagen,$estado);
            return $articulo;
        }else{
           return null;   
        }
    }
    
    public function registrarArticulo($articulo){
        $this->bd->getConeccion();
        $sql="INSERT INTO artículos(CODIGO,NOMBREARTICULO,DESCRIPCION,CATEGORIA,PRECIO,IMAGEN,ESTADO) VALUES (?,?,?,?,?,?,?)";
        $paramType= 'ssssdss';
        $paramValue= array($articulo->getCodigo(),
                           $articulo->getNombrearticulo(),
                           $articulo->getDescripcion(),
                           $articulo->getCategoria(),        
                           $articulo->getPrecio(),
                           $articulo->getImagen(),
                           $articulo->getEstado());

        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);         
        $this->bd->cerrarConeccion();
    }    
    
    

    public function actualizar($articulo){
        $this->bd->getConeccion();        
        $sql="UPDATE artículos SET CODIGO=?, NOMBREARTICULO=?, DESCRIPCION=?, CATEGORIA=?, PRECIO=?, IMAGEN=?, ESTADO=? WHERE ID=?";
        $paramType= 'ssssdssi';
        $paramValue= array($articulo->getCodigo(),
                           $articulo->getNombrearticulo(),
                           $articulo->getDescripcion(),
                           $articulo->getPrecio(),
                           $articulo->getImagen(),  
                           $articulo->getEstado(),
                           $articulo->getId());
                            
        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);                
        $this->bd->cerrarConeccion();        
    }
    
}
