<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio | Sin Collar</title>
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
                                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
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
                                <a class="nav-link" aria-current="page" href="login.php">Login</a>
                            </li>      
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="section0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade custom-carousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="img/callejero3.jpg" class="d-block custom-width" alt="">
                        <div class="carousel-caption d-sm-block">
                            <h1 class="d-block">#AdoptaUnSenior</h1>
                            <h5 class="d-none d-sm-block">¡Dale a un perro mayor la oportunidad de vivir sus años dorados rodeado de amor y afecto!</h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/callejero2.jpg" class="d-block custom-width" alt="" >
                        <div class="carousel-caption d-md-block">
                            <h1>#NoAlMaltratoAnimal</h1>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/negrito.jpg" class="d-block custom-width" alt="">
                        <div class="carousel-caption d-md-block">
                            <h1 class="d-block">#ElColorNoImporta</h1>
                            <h5 class="d-none d-sm-block">Todos los perros y gatos merecen amor y respeto.</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        <div id="section1">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col">
                    <div class="card h-100" id="card">
                        <img src="img/culto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title tipo-letra">Infórmate</h5>
                            <p class="card-text">¿Sabías que en Chile hay más de un millón de perros abandonados?</p>
                        </div>
                        <div class="card-footer tipo-letra">
                            <a href="" class="btn btn-warning"><img src="img/info.svg">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" id="card">
                        <img src="img/tenencia.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title tipo-letra">Tenencia Responsable</h5>
                            <p class="card-text">Tu igual puedes ser la voz de los que no pueden exigir sus derechos.</p>
                        </div>
                        <div class="card-footer tipo-letra">
                            <a href="" class="btn btn-warning"><img src="img/hand.svg">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" id="card">
                        <img src="img/triste.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title tipo-letra">Publica un Callejero</h5>
                            <p class="card-text">Ayúda a estos guerreros de la calle. Prohibida la venta de animales.</p>
                        </div>
                        <div class="card-footer tipo-letra">
                            <a href="publica.php" class="btn btn-warning"><img src="img/shield-dog.svg">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" id="card">
                        <img src="img/adopta.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title tipo-letra">Adopta</h5>
                            <p class="card-text">Cambia la vida de un animal en situación de calle para siempre.</p>
                        </div>
                        <div class="card-footer tipo-letra">
                            <a href="adopta.php" class="btn btn-warning"><img src="img/dog.svg">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" id="card">
                        <img src="img/hambre.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title tipo-letra">Colabora</h5>
                            <p class="card-text">Entre todos podemos ayudar a seguir sumando más finales felices.</p>
                        </div>
                        <div class="card-footer tipo-letra">
                            <a href="" class="btn btn-warning"><img src="img/bone.svg">Ver Más</a>
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