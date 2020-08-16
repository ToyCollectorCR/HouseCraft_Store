<?php

class categorias {
    
    private $id;
    private $codigo;
    private $descripcion;
    private $fechacreacion;
    
    function __construct($id, $codigo, $descripcion, $fechacreacion) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->fechacreacion = $fechacreacion;
    }
    
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFechacreacion() {
        return $this->fechacreacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFechacreacion($fechacreacion) {
        $this->fechacreacion = $fechacreacion;
    }



}
