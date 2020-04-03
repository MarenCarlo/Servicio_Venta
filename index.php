<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="media/icon.png" />
        <title>.:La Zacapaneca:.</title>
        
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <header>
            <nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-info">
                <a id="LogoX" class="navbar-brand" href="#">La Zacapaneca</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentLG" aria-controls="navbarSupportedContentLG" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContentLG">
                    <div class="container">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" style="border-width: 2px;">
                            <a class="nav-link" href="#Menu1">Menu Principal</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="form2.php">Tus Ordenes</a>
                        </li>
                        <hr/>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Iniciar Sesion</a>
                        </li>
                        <!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLG" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownLG">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        !-->
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 3.5em;">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="media/TH1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bienvenido a La Zacapaneca</h5>
                        <p>La primera Venta de tortillas de harina en linea.</p>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="media/TH2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Disfruta de nuestros Combos</h5>
                        <p>Preparados exclusivamente para ti con los mejores ingredientes...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/TH3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Los Mejores de Oriente</h5>
                        <p>Degusta de las mejores tortillas de harina de todo Oriente...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/TH4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Has Eficiente tu tiempo de Compra</h5>
                        <p>Ordena ya y solo toma tiempo para llegarlas a traer...</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Image and text -->
        <nav id="Menu1" class="navbar navbar-light bg-info">       
            <div class="mx-auto" style="width: 80px; margin-top: 10px;">
                <h4 id="LogoX" class="text-white">Menu</h4>
            </div>
        </nav>

        <br>

        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <img src="media/Menu1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Combo Wrap Menor</h5>
                        <p class="card-text">Una tortilla de Harina Sencilla con una porcion de Papas y una Coca-Cola Tamaño Personal.</p>
                    </div>
                    <div class="card-footer text-white bg-info">
                        <h5 class="card-title pricing-card-title float-left">Q.35.00</h5>

                        <form name="Form1" action="form1.php" method="POST">
                            <input type="text" name="Com1" value="1" hidden>
                            <input type="submit" value="Ordena Ya" class="btn btn-success float-right"/>  
                        </form>

                    </div>
                </div>
                <div class="card">
                    <img src="media/Menu2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Combo Wrap Mayor</h5>
                        <p class="card-text">Tortilla de Harina Especial con una Porcion de Papas Fritas y una Coca-Cola tamaño Personal.</p>
                    </div>
                    <div class="card-footer text-white bg-info">
                        <h5 class="card-title pricing-card-title float-left">Q.40.00</h5>
                        <form name="Form1" action="form1.php" method="POST">
                            <input type="text" name="Com1" value="2" hidden>
                            <input type="submit" value="Ordena Ya" class="btn btn-success float-right"/>  
                        </form>
                    </div>
                </div>
                <div class="card">
                    <img src="media/Menu3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Combo Deluxe</h5>
                    <p class="card-text">Tortilla de Harina Doble, con una Porcion de Papas Fritas y una Coca-Cola Tamaño Personal.</p>
                    </div>
                    <div class="card-footer text-white bg-info">
                        <h5 class="card-title pricing-card-title float-left">Q.50.00</h5>
                        <form name="Form1" action="form1.php" method="POST">
                            <input type="text" name="Com1" value="3" hidden>
                            <input type="submit" value="Ordena Ya" class="btn btn-success float-right"/>  
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        <br> 
        <footer id="Foot1">
            <nav class="navbar navbar-expand-xl navbar-dark bg-info">
                <a id="LogoX" class="navbar-brand" href="#">La Zacapaneca</a>
                <hr/>
                <div class="collapse navbar-collapse" id="navbarSupportedContentLG">
                    <div class="container">
                    <ul class="navbar-nav mr-auto float-right">
                        <li class="nav-item">
                            <a class="nav-link" href="#Foot1">Sobre Nosotros...</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-xl navbar-dark bg-info">
                <div class="mx-auto" style="width: 130px;">
                    <h6 style="color: #FFF">#NoSalgasDeCasa</h6>
                </div>      
            </nav>
        </footer>
    </body>
</html>