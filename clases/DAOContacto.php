<?php

require_once './conexion.php';
require_once './datos.php';

class DAOContacto{
    
    
    public function ingresarMensaje($contacto) {
        try {
            $sql = "insert into tb_mensajes values(null,'@nombre','@correo','@mensaje')";
            $sql= str_replace("@nombre", $contacto->getNombre(), $sql);
            $sql= str_replace("@correo", $contacto->getCorreo(), $sql);
            $sql= str_replace("@mensaje",$contacto->getMensaje(), $sql);
            $d = new Datos();
            $resp = $d->setDato($sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}