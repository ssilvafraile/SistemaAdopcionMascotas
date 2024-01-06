<?php
//llamamos al archivo conectar.php y datos.php para usar usus metodos.
require_once('./clases/conexion.php');
require_once('./clases/datos.php');
//instanciamos de la clase datos
$d = new Datos();
//guardamos en una variable $publicaciones lo que nos trae de la bd.
$publicaciones = $d->getDatos("select tb_publicacion.id_publicacion, tb_publicacion.nombre_dueno, tb_publicacion.ap_dueno, tb_publicacion.edad_dueno, tb_publicacion.fono_dueno, tb_publicacion.correo_dueno,tb_publicacion.id_sexo, tb_publicacion.id_region,tb_publicacion.upload_foto,tb_publicacion.descripcion_dueno,tb_publicacion.fecha_creacion,
tb_sexo.tipo_sexo as sexo, tb_region.nombre_region as region from tb_publicacion
inner join tb_sexo on tb_sexo.id_sexo = tb_publicacion.id_sexo
inner join tb_region on tb_region.id_region = tb_publicacion.id_region
order by tb_publicacion.id_publicacion;");
//print_r($publicaciones);

// Supongamos que $publicaciones es tu array de publicaciones
$publicaciones_por_pagina = 4; // Número de publicaciones por página
$total_publicaciones = count($publicaciones);
$total_paginas = ceil($total_publicaciones / $publicaciones_por_pagina);

// Obtener el número de página actual
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el rango de publicaciones a mostrar en la página actual
$inicio = ($pagina_actual - 1) * $publicaciones_por_pagina;
$fin = $inicio + $publicaciones_por_pagina;

// Obtener las publicaciones de la página actual
$publicaciones_pagina_actual = array_slice($publicaciones, $inicio, $publicaciones_por_pagina);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adopta | Sin Collar</title>
        <link rel="icon" href="img/logo_white.png" type="image/png">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/test.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>  
        <div id="cabecera">
            <nav class="navbar navbar-expand-lg w-auto p-4" data-bs-theme="dark" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo_white.png" alt="Logo" width="30" height="28" class="d-inline-block">
                        Sin-Collar
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link active" href="adopta.php">Adopta un Peludo</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="publica.php">Publica un Callejero</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="autor.php">¿Quienes Somos?</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link" aria-current="page" href="login.php">Login</a>
                            </li>      
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container mt-3 col-sm-50">
            <div class="card border-secondary mb-4">
                <div class="card-header bg-dark text-white text-center tipo-letra">
                    <h1>Amor en Cuatro Patas </h1>
                    <h5>¡Adopta a Tu Compañero Peludo!</h5>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mx-2 mb-3">
                    <?php foreach ($publicaciones_pagina_actual as $resultado_publicaciones) : ?>
                        <div class="col">
                            <div class="card" style="height: 100%">
                                <img src="<?php echo $resultado_publicaciones['upload_foto'] ?>" class="card-img-top" height="300px" alt="...">
                                <div class="card-body tipo-letra">
                                    <h5 class="card-title"><?php echo $resultado_publicaciones['nombre_dueno'] ?></h5>
                                    <button type="button" class="btn btn-warning btn-sm">
                                        <a href="clases/infoPublicacion.php?id=<?php echo $resultado_publicaciones['id_publicacion'] ?>&pagina=<?php echo $pagina_actual ?>" class="btn btn-warning btn-sm">Ver Más</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                            <li class="page-item <?php echo ($i == $pagina_actual) ? 'active' : ''; ?>">
                                <a class="page-link <?php echo ($i == $pagina_actual) ? 'bg-dark text-white border-dark' : 'text-dark border-dark'; ?>" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
                <!-- Fin de la paginación -->
            </div>
            <!-- Paginación -->

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