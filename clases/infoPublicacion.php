<?php
//llamamos al archivo conectar.php y datos.php para usar usus metodos.
require_once('../clases/conexion.php');
require_once('../clases/datos.php');
//rescatamos el id enviado via url.
$id = $_GET['id'];
$pagina = $_GET['pagina'];
//instanciamos de la clase datos
$d = new Datos();
//guardamos en una variable $publicaciones lo que nos trae de la bd.
$info_publicacion = $d->getDatos("select tb_publicacion.id_publicacion, tb_publicacion.nombre_dueno, tb_publicacion.ap_dueno, tb_publicacion.edad_dueno, tb_publicacion.fono_dueno, tb_publicacion.correo_dueno,tb_publicacion.id_sexo, tb_publicacion.id_region,tb_publicacion.upload_foto,tb_publicacion.descripcion_dueno,tb_publicacion.fecha_creacion,
tb_sexo.tipo_sexo as sexo, tb_region.nombre_region as region from tb_publicacion
inner join tb_sexo on tb_sexo.id_sexo = tb_publicacion.id_sexo
inner join tb_region on tb_region.id_region = tb_publicacion.id_region
where tb_publicacion.id_publicacion = '$id';");
//print_r($_GET['pagina']);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adopta | Sin Collar</title>
        <link rel="icon" href="../img/logo_white.png" type="image/png">
        <link rel="stylesheet" href="../css/estilo.css">
        <script src="../js/test.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
                                <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="../adopta.php">Adopta un Peludo</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="../publica.php">Publica un Callejero</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="../contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="../autor.php">¿Quienes Somos?</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link" aria-current="page" href="../login.php">Login</a>
                            </li>      
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container mt-3 col-sm-8">
    <div class="card border-secondary mb-4">
        <div class="card-header bg-dark text-white text-center">
            <h1>Información Detallada</h1>
            <h5>¡Adopta a Tu Compañero Peludo!</h5>
        </div>

        <div class="row g-4 mt-2 mx-2 mb-3 align-items-stretch">
            <?php
            foreach ($info_publicacion as $resultado_publicaciones) {
            ?>
                <div class="col-md-6">
                    <div class="card h-100">
                        <?php $ruta = "../" . $resultado_publicaciones['upload_foto'] ?>
                        <img src="<?php echo $ruta ?>" class="card-img-top" height="500px" alt="...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h2 class="card-title"><?php echo $resultado_publicaciones['nombre_dueno'] ?> <?php echo $resultado_publicaciones['ap_dueno'] ?></h2>
                                <h5 class="card-title"><?php echo $resultado_publicaciones['edad_dueno'] ?> años</h5><br>
                                <p class="card-title"><h5>Contacto:</h5>
                                    Fono: <?php echo $resultado_publicaciones['fono_dueno'] ?> <br>
                                    Correo: <?php echo $resultado_publicaciones['correo_dueno'] ?></p>
                                <p class="card-title"><h5>Descripción:</h5>
                                    <?php echo $resultado_publicaciones['descripcion_dueno'] ?> </p>
                            </div>
                            <div class="text-center">
                                <p class="card-text"><small class="text-body-secondary"><?php echo $resultado_publicaciones['fecha_creacion'] ?> - <?php echo $resultado_publicaciones['region'] ?></small></p>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <a href="../adopta.php?pagina=<?php echo $pagina ?>" class="btn btn-warning btn-sm">Atrás</a>
                                </button>
                            </div>
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

