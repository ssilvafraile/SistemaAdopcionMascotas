<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
    session_destroy();
    header("Location: ../login.php");
    exit;
} else {
//llamamos al archivo conectar.php y datos.php para usar usus metodos.
    require_once('conexion.php');
    require_once('datos.php');
//instanciamos de la clase datos
    $d = new Datos();
//guardamos en una variable $sexo lo que nos trae de la bd.
    $mensajes = $d->getDatos("select tb_mensajes.id_mensaje, tb_mensajes.nombre, tb_mensajes.correo, tb_mensajes.mensaje from tb_mensajes;");
    //print_r($mensajes);
}
?>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Adopta | Sin Collar</title>
        <link rel="icon" href="../img/logo_white.png" type="image/png">
        <link rel = "stylesheet" href = "../css/estilo.css">
        <script src="../js/test.js"></script>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin = "anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin = "anonymous"></script>
    </head>
    <body>  
        <div id="cabecera">
            <nav class="navbar navbar-expand-lg w-auto p-4" data-bs-theme="dark" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/logo_white.png" alt="Logo" width="30" height="28" class="d-inline-block">
                        Sin-Collar
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link" aria-current="page" href="publicacionesAdmin.php">Administrar Publicaciones</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link active" aria-current="page" href="mensajesAdmin.php">Bandeja de Mensajes</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link" aria-current="page" href="cerrarSesion.php">Cerrar Sesión</a>
                            </li>      
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container mt-5 col-sm-50">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-dark text-white text-center tipo-letra">
                    <h1>Bandeja de Mensajes</h1>
                    <h5></h5>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mx-2 mb-3">
                    <?php
                    foreach ($mensajes as $resultado_mensajes) {
                        ?>

                        <div class="col">
                            <div class="card text-bg-light mb-3" style="height: 100%">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $resultado_mensajes['nombre'] ?></h5>
                                    <p class="card-text"><?php echo $resultado_mensajes['correo'] ?></p>
                                    <p class="card-text"><?php echo $resultado_mensajes['mensaje'] ?></p>
                                    <a href="eliminarMensajes.php?id=<?php echo $resultado_mensajes['id_mensaje'] ?>" class="btn btn-dark"active>Eliminar Mensaje</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->

        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.5);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>
</body>
</html>



