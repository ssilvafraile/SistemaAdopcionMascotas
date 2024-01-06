<?php
require_once './conexion.php';
require_once './datos.php';

$id = $_GET['id'];

$d = new Datos();
$sql = "delete from tb_mensajes where id_mensaje = $id";
$resp = $d->setDato($sql);
if ($resp == true) {
    header("Location: mensajesAdmin.php");
} else {
    echo 0;
}