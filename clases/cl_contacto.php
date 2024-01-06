<?php

require_once '../clases/conexion.php';
require_once '../clases/datos.php';

class cl_contacto {
    public $id;
    public $nombre;
    public $correo;
    public $mensaje;
    
    //constructor con 3 parametros
    public function __construct() {
     
    }
    

      
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setMensaje($mensaje): void {
        $this->mensaje = $mensaje;
    }


    
    
    
}
