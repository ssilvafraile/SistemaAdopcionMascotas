<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Autor | Sin Collar</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/valida_login.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="autor.php">¿Quienes Somos?</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item text-center">
                                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                            </li>      
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div>
            <div class="container mt-5 col-sm-7">


                <!-- Section: Design Block -->
                <section class=" text-center text-lg-start">
                    <style>
                        .rounded-t-5 {
                            border-top-left-radius: 0.5rem;
                            border-top-right-radius: 0.5rem;
                        }

                        @media (min-width: 992px) {
                            .rounded-tr-lg-0 {
                                border-top-right-radius: 0;
                            }

                            .rounded-bl-lg-5 {
                                border-bottom-left-radius: 0.5rem;
                            }
                        }
                    </style>
                    <div class="card mb-3">
                        <div class="row g-0 d-flex align-items-center">
                            <div class="col-lg-4 d-none d-lg-flex">
                                <img src="img/dalmata1.png" alt="" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5 img-fluid" />
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body py-5 px-md-5">
                                    <form method="post" action="js/valida_login.js" id="login">
                                        <div class="card-header bg-dark text-white text-center mb-3 tipo-letra">
                                            <h3>Inicio Sesión</h3>
                                        </div>
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="txtUser" class="form-control" autofocus="true" />
                                            <label class="form-label" for="txtUser">Usuario</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="txtPass" class="form-control" />
                                            <label class="form-label" for="txtPass">Contraseña</label>
                                        </div>




                                        <!-- Submit button -->
                                        <div class="text-center tipo-letra">
                                            <button type="submit" class="btn btn-warning btn-block mb-4 col-lg-4 ">Acceder</button>
                                        </div>                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->

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