<?php

class compras {
    
    private $id;
    private $nombrecomprador;
    private $telefono;
    private $direccion;
    private $tc;
    private $nombrearticulo;
    private $descripcion;
    private $precio;
    private $idartesano;
    
    function __construct($id, $nombrecomprador, $telefono, $direccion, $tc, $nombrearticulo, $descripcion, $precio, $idartesano) {
        $this->id = $id;
        $this->nombrecomprador = $nombrecomprador;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->tc = $tc;
        $this->nombrearticulo = $nombrearticulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->idartesano = $idartesano;
    }

    
    function getId() {
        return $this->id;
    }

    function getNombrecomprador() {
        return $this->nombrecomprador;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTc() {
        return $this->tc;
    }

    function getNombrearticulo() {
        return $this->nombrearticulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getIdartesano() {
        return $this->idartesano;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombrecomprador($nombrecomprador) {
        $this->nombrecomprador = $nombrecomprador;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTc($tc) {
        $this->tc = $tc;
    }

    function setNombrearticulo($nombrearticulo) {
        $this->nombrearticulo = $nombrearticulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setIdartesano($idartesano) {
        $this->idartesano = $idartesano;
    }


    
}
