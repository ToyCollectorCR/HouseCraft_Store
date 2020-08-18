<?php

class articulos {
    
    private $id;
    private $codigo;
    private $nombrearticulo;
    private $descripcion;
    private $categoria;
    private $precio;
    private $imagen;
    private $estado;
    private $idartesano;
            
    function __construct($id, $codigo, $nombrearticulo, $descripcion, $categoria, $precio, $imagen, $estado, $idartesano) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nombrearticulo = $nombrearticulo;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->estado = $estado;
        $this->idartesano = $idartesano;
    }
    
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombrearticulo() {
        return $this->nombrearticulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getEstado() {
        return $this->estado;
    }

    function getIdartesano() {
        return $this->idartesano;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombrearticulo($nombrearticulo) {
        $this->nombrearticulo = $nombrearticulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setIdartesano($idartesano) {
        $this->idartesano = $idartesano;
    }


    
}