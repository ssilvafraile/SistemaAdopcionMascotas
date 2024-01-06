<!doctype html>
<?php
//llamamos al archivo conectar.php y datos.php para usar usus metodos.
require_once('./clases/conexion.php');
require_once('./clases/datos.php');
//instanciamos de la clase datos
$d = new Datos();
//guardamos en una variable $sexo lo que nos trae de la bd.
$sexo = $d->getDatos("select * from tb_sexo;");
$ubicacion = $d->getDatos("select * from tb_region");
//print_r($ubicacion);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Publica | Sin Collar</title>
        <link rel="icon" href="img/logo_white.png" type="image/png">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/valida_publicacion.js"></script>    
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <a class="nav-link" href="adopta.php">Adopta un Peludo</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link active" href="publica.php">Publica un Callejero</a>
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
        <div class="container mt-3 mb-2 col-sm-7">
            <div class="card border-secondary mb-4">
                <div class="card-header bg-dark text-white text-center tipo-letra">
                    <h1>Crea una publicación</h1>
                    <h5>*Recuerda que esta prohibida la venta de mascotas*</h5>
                </div>
                <div class="card-body text-dark">
                    <form method="post" action="js/valida_publicacion.js" id="formulario" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="txtNombre" class="col-sm-2 col-form-label">Nombre:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="txtNombre" id="txtNombre" autofocus="true">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="txtApellido" class="col-sm-2 col-form-label">Apellido:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="txtApellido" id="txtApellido">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="txtEdad" class="col-sm-2 col-form-label">Edad:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="txtEdad" id="txtEdad">
                            </div>
                            <label for="txtTelefono" class="col-sm-2 col-form-label">Telefono/Celular:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="txtTelefono" id="txtTelefono">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="txtCorreo" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" name="txtCorreo" id="txtCorreo">
                            </div>

                            <label for="txtCorreo2" class="col-sm-2 col-form-label">Confirmación E-mail:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="txtCorreo2" id="txtCorreo2">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="id_sexo" class="col-sm-2 col-form-label">Sexo:</label>
                            <div class="col-sm-3">
                                <select name="txtSexo" id="id_sexo" class="form-control">
                                    <?php
                                    //listamos el sexo existentes en la bd tabla tb_sexo
                                    foreach ($sexo as $resultado_sexo) {
                                        ?>
                                        <option value="<?php echo $resultado_sexo['id_sexo']; ?>">
                                            <?php echo $resultado_sexo['tipo_sexo']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <label for="id_region" class="col-sm-2 col-form-label">Ubicación/Región:</label>
                            <div class="col-sm-4">
                                <select name="txtRegion" id="id_region" class="form-control">
                                    <?php
                                    //listamos las provincias existentes en la bd tabla tb_provincia
                                    foreach ($ubicacion as $resultado_ubicacion) {
                                        ?>
                                        <option value="<?php echo $resultado_ubicacion['id_region']; ?>">
                                            <?php echo $resultado_ubicacion['nombre_region']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="id_foto" class="col-sm-2 col-form-label">Subir Foto:</label> 
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="id_foto" name="id_foto">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="txtMensaje" class="col-sm-2 col-form-label">Descripción:</label> 
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="txtMensaje" id="txtMensaje" rows="10" cols="10"></textarea>
                            </div>

                        </div>
                        <div class="text-center tipo-letra">
                            <input type="submit" value="Publicar" class="btn btn-warning">
                            <p class="mt-3">
                                Con un click a "Publicar" aceptas nuestros
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Terminos y Condiciones.
                                </button>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Términos y condiciones para el correcto uso de sincollar.cl</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¡Bienvenido a nuestra página web dedicada a la adopción de perros y gatos callejeros! Nos complace que estés considerando brindarle un hogar amoroso a uno de estos maravillosos compañeros peludos. Antes de proceder con el proceso de adopción, te pedimos que leas y comprendas nuestros términos y condiciones a continuación.
                                            <br><br>
                                            <h4>Objetivo:</h4>
                                            Nuestro sitio web tiene como objetivo principal promover la adopción responsable de perros y gatos callejeros. Nos dedicamos a que través de esta plataforma web, estos queridos amigos encuentren hogares permanentes, proporcionándoles una segunda oportunidad en la vida.
                                            <br><br>
                                            <h4>No se permite la venta:</h4>
                                            En nuestra plataforma, no está permitida la venta de ningún tipo de mascotas. Nos enfocamos exclusivamente en la adopción de perros y gatos callejeros con el unico propósito de ayudar a estos animales desamparados y mejorar su calidad de vida.
                                            <br><br>
                                            <h4>Proceso de adopción:</h4>
                                            Para garantizar la adopción responsable, requerimos que los solicitantes pasen por un proceso de adopción. Esto puede incluir la presentación de una solicitud, una entrevista personal, la verificación de referencias y un posible seguimiento posterior a la adopción esto según la persona que realizó la publicación de un perrito/gatito en situación de calle. 
                                            Nos reservamos el derecho de eliminar cualquier publicación que consideremos inapropiada o que no cumpla con nuestros criterios de adopción.
                                            <br><br>
                                            <h4>Responsabilidades del adoptante:</h4>
                                            Al adoptar un perrito o gatito de nuestra plataforma, te comprometes a brindarle los cuidados adecuados, incluyendo atención veterinaria regular, alimentación adecuada, ejercicio, cariño y un ambiente seguro. Debes asegurarte de que tu hogar sea adecuado según su tamaño y las necesidades individuales del perrito/gatito que deseas adoptar.
                                            <br><br>
                                            <h4>Política de devoluciones:</h4>
                                            Entendemos que las circunstancias pueden cambiar y, en caso de que no puedas cuidar adecuadamente al perrito/gatito adoptado, te pedimos que nos lo devuelvas inmediatamente para que podamos encontrarle un nuevo hogar.
                                            <br><br>
                                            <h4>Propiedad intelectual:</h4>
                                            Todo el contenido presente en nuestro sitio web, incluyendo textos, imágenes, logotipos y diseños, está protegido por derechos de autor. No está permitida la reproducción, distribución o uso no autorizado de dicho contenido sin nuestro consentimiento previo por escrito.
                                            <br><br>
                                            Al utilizar nuestro sitio web y participar en el proceso de adopción, aceptas cumplir con estos términos y condiciones. Te pedimos que los leas atentamente antes de continuar con la adopción de un perrito/gatito callejero. Si tienes alguna pregunta o inquietud, no dudes en comunicarte con nosotros en el siguiente enlace -> <a href="contacto.php">Contacto</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Acepto las condiciones</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>
                    </form>
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