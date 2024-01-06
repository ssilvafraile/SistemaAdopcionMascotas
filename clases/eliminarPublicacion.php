<?php
require_once './conexion.php';
require_once './datos.php';

$id = $_GET['id'];

$d = new Datos();
$sql = "delete from tb_publicacion where id_publicacion = $id";
$resp = $d->setDato($sql);
if ($resp == true) {
    header("Location: publicacionesAdmin.php");
} else {
    echo 0;
}