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
    $publicaciones = $d->getDatos("select tb_publicacion.id_publicacion, tb_publicacion.nombre_dueno, tb_publicacion.ap_dueno, tb_publicacion.edad_dueno, tb_publicacion.fono_dueno, tb_publicacion.correo_dueno,tb_publicacion.id_sexo, tb_publicacion.id_region,tb_publicacion.upload_foto,tb_publicacion.descripcion_dueno,tb_publicacion.fecha_creacion,
tb_sexo.tipo_sexo as sexo, tb_region.nombre_region as region from tb_publicacion
inner join tb_sexo on tb_sexo.id_sexo = tb_publicacion.id_sexo
inner join tb_region on tb_region.id_region = tb_publicacion.id_region
order by tb_publicacion.id_publicacion;");
//print_r($publicaciones);
}
?>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Adopta | Sin Collar</title>
        <link rel = "stylesheet" href = "../css/estilo.css">
        <script src="../js/valida_login.js"></script>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin = "anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin = "anonymous"></script>
    </head>
    <body>  
        <div id="cabecera">
            <nav class="navbar navbar-expand-lg w-auto p-4" data-bs-theme="dark" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../img/logo_white.png" alt="Logo" width="30" height="28" class="d-inline-block">
                        Sin-Collar
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link active" aria-current="page" href="publicacionesAdmin.php">Administrar Publicaciones</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" aria-current="page" href="mensajesAdmin.php">Bandeja de Mensajes</a>
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
                    <h1>Administrar Publicaciones</h1>
                    <h5></h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fono</th>
                                <th>Correo</th>
                                <th>Fecha Publicación</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($publicaciones as $resultado_publicaciones) {
                                ?> 
                                <tr>
                                    <td><?php echo $resultado_publicaciones['id_publicacion'] ?></td>  
                                    <td><?php echo $resultado_publicaciones['nombre_dueno'] ?></td> 
                                    <td><?php echo $resultado_publicaciones['fono_dueno'] ?></td> 
                                    <td><?php echo $resultado_publicaciones['correo_dueno'] ?></td> 
                                    <td><?php echo $resultado_publicaciones['fecha_creacion'] ?></td> 
                                    <td><?php echo $resultado_publicaciones['upload_foto'] ?></td> 
                                    <td><a href="eliminarPublicacion.php?id=<?php echo $resultado_publicaciones['id_publicacion'] ?>" class="btn btn-danger">Eliminar</a></td> 
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
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


