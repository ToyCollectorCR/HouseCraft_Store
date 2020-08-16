<?php

class usuarios {
    
    private $id;
    private $codigo;
    private $password;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $fechaingreso;
    private $tipo;
    private $estado;
    
    function __construct($id, $codigo, $password, $nombre, $apellido, $correo, $telefono, $fechaingreso, $tipo, $estado) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->fechaingreso = $fechaingreso;
        $this->tipo = $tipo;
        $this->estado = $estado;
    }
    
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getPassword() {
        return $this->password;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getFechaingreso() {
        return $this->fechaingreso;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setFechaingreso($fechaingreso) {
        $this->fechaingreso = $fechaingreso;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }



    
}


