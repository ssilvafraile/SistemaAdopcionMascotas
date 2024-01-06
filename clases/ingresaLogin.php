<?php

session_start();
//llamamos al archivo conectar.php y datos.php para usar usus metodos 
require_once('./conexion.php');
require_once './datos.php';

//rescatamos los datos enviados por ajax
$usuario = $_POST['u'];
$pass = $_POST['p'];

//validamos nuevamente en el back si los parametros no estan vacios
if (empty($usuario) || empty($pass)) {
    
} else {
    // Todos los parámetros contienen datos
    // Realizar las operaciones necesarias con los parámetros
    //creamos las variables de sesion
    $_SESSION['usuario'] = $usuario;
    $_SESSION['clave'] = $pass;
    $_SESSION['login'] = false;
    $d = new Datos();
    // Preparar la consulta
    $sql = "select nombre_usuario, pass_usuario from tb_usuario where nombre_usuario= '" . $usuario . "' and pass_usuario= '" . $pass . "'";
    $resp = $d->getDatos($sql);
    if ($resp == true) {
        $_SESSION['login'] = true;
        echo 1;
    } else {
        echo 0;
    }
}
