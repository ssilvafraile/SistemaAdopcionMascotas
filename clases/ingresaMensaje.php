<?php

//llamamos al archivo conectar.php y datos.php para usar usus metodos 
require_once('./conexion.php');
require_once './datos.php';
require_once './DAOContacto.php';
require_once './cl_contacto.php';

//rescatamos los datos enviados por ajax
$nombre = $_POST['nom'];
$correo = $_POST['email'];
$mensaje = $_POST['msj'];

//validamos nuevamente en el back si los parametros no estan vacios
/*if (empty($nombre) || empty($correo) || empty($mensaje)) {
    
} else {
    // Todos los parámetros contienen datos
    // Realizar las operaciones necesarias con los parámetros
    $d = new Datos();
    // Preparar la consulta
    $sql = "insert into tb_mensajes values(null, '" . $nombre . "','" . $correo . "','" . $mensaje . "');";
    $resp = $d->setDato($sql);
    if ($resp == true) {
        echo 1;
    } else {
        echo 0;
    }
}*/
$contacto = new cl_contacto();
$contacto->setNombre($nombre);
$contacto->setCorreo($correo);
$contacto->setMensaje($mensaje);

$daoC = new DAOContacto();
$respuesta = $daoC->ingresarMensaje($contacto);

if ($respuesta == true) {
        echo 1;
    } else {
        echo 0;
    }