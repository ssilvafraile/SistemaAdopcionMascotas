<?php

//llamamos al archivo conectar.php y datos.php para usar usus metodos 
require_once('./conexion.php');
require_once './datos.php';

$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];
$edad = $_POST["txtEdad"];
$telefono = $_POST["txtTelefono"];
$email = $_POST["txtCorreo"];
$sexo = $_POST["txtSexo"];
$ubicacion = $_POST["txtRegion"];

$foto = $_FILES["id_foto"];
$descripcion = $_POST["txtMensaje"];

//validamos que el archivo file sea .jpg .png . jpeg
if ($foto['type'] == 'image/jpeg' or $foto['type'] == 'image/png' or $foto['type'] == 'image/jpg') {
    switch ($foto['type']) {
        case 'image/jpeg':
            //en una variable guardaremos el nombre del archivo que sube el cliente con nombre unico utilizando la fecha,hora,seg.
            $archivo_upload = time() . ".jpg";
            break;
        case 'image/jpg':
            $archivo_upload = time() . ".jpg";
            break;
        case 'image/png':
            $archivo_upload = time() . ".png";
            break;
    }
    $ruta = "../upload/" . $archivo_upload;
    copy($foto['tmp_name'], $ruta);
    //cree una nueva ruta de la imagen en la variable $url para introducirla directamente en img src= del html. 
    $url = "upload/" . $archivo_upload;
} else {
    echo 2;
    return;
}

// Todos los parámetros contienen datos
// Realizar las operaciones necesarias con los parámetros
$d = new Datos();
$sql = "insert into tb_publicacion values(null, '" . $nombre . "','" . $apellido . "','" . $edad . "','" . $telefono . "','" . $email . "','" . $sexo . "','" . $ubicacion . "','" . $url . "','" . $descripcion . "', now());";
//$sql = "insert into tb_publicacion values(null, '" . $nombre . "','" . $apellido . "','" . $edad . "','" . $telefono . "','" . $email . "','" . $sexo . "','" . $ubicacion . "','" . $foto . "','" . $descripcion . "', now());";
$resp = $d->setDato($sql);
if ($resp == true) {
    echo 1;
} else {
    echo 0;
}
