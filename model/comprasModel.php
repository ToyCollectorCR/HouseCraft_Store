<?php

require_once 'baseDatos/conexion.php';
require_once 'compras.php';
require_once 'articulos.php';


class comprasModel {
   
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
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
            $idartesano = $registros[0]['idartesano'];
            
            $articulo = new articulos($id,$codigo,$nombrearticulo,$descripcion,$categoria,$precio,$imagen,$estado,$idartesano);
            return $articulo;
        }else{
           return null;   
        }
    }
    
    
    public function comprarArticulo($compra){
        $this->bd->getConeccion();
        $sql="INSERT INTO compras(id,nombrecomprador,telefono,direccion,tc,nombrearticulo,descripcion,precio,idartesano) VALUES (?,?,?,?,?,?,?,?,?)";
        $paramType= 'isssissii';
        $paramValue= array($compra->getId(),
                           $compra->getNombrecomprador(),
                            $compra->getTelefono(),
                           $compra->getDireccion(),
                           $compra->getTc(),        
                           $compra->getNombrearticulo(),
                           $compra->getDescripcion(),
                           $compra->getPrecio(),
                           $compra->getIdartesano());

        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);         
        $this->bd->cerrarConeccion();
    }    
    
    
    
}
