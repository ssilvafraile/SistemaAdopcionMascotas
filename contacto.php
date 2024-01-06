<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacto | Sin Collar</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="js/valida_contacto.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>  
        <div id="cabecera">
            <nav class="navbar navbar-expand-lg w-auto p-4" data-bs-theme="dark" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
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
                                <a class="nav-link" href="publica.php">Publica un Callejero</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link active" href="contacto.php">Contacto</a>
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
        <div class="container mt-3 col-sm-7">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-dark text-white text-center tipo-letra">
                    <h1>Contactame</h1>
                    <h5>Dejanos tus dudas en el siguiente formulario</h5>
                </div>
                <div class="card-body text-dark">
                    <form method="post" action="js/valida_contacto.js"  id="formulario">
                        <div class="mb-3 row">
                            <label for="txtNombre" class="col-sm-2 col-form-label">Nombre:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtNombre" autofocus="true">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="txtCorreo" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" id="txtCorreo">
                            </div>

                            <label for="txtCorreo2" class="col-sm-2 col-form-label">Confirmación E-mail:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="txtCorreo2">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="txtMensaje" class="col-sm-2 col-form-label">Mensaje:</label> 
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="mensaje" id="txtMensaje" rows="5" cols="10"></textarea>
                            </div>

                        </div>
                        <div class="text-center tipo-letra">
                            <input type="submit" value="Enviar" class="btn btn-warning">

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