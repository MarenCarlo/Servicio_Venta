<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="media/icon.png"/>
        <title>.:La Zacapaneca:.</title>
        
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <header>
            <nav id="NAVX2" class="navbar fixed-top navbar-expand-xl navbar-dark bg-info">
                <a id="LogoX" class="navbar-brand" href="#">La Zacapaneca</a>

                <button id="BUTX" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentLG" aria-controls="navbarSupportedContentLG" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContentLG" style="margin-top: 1em;">
                    <div class="container">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" style="border-width: 2px;">
                            <a class="nav-link" href="index.php">Menu Principal</a>
                        </li>
                        <hr/>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Iniciar Sesion</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

        <br>
        <br>

        <div style="margin-top: 22px;">
            <nav id="NAVX3" class="navbar navbar-light bg-info">       
                <div class="mx-auto">
                    <h4 class="text-white" style="font-size: 1em;">.:Formulario de Revision:.</h4>
                </div>
            </nav>
        </div>
        <div class="container">
            <div id="Form2" class=""  style="padding-bottom: 309px;">
                <br>

                <nav class="navbar navbar-light bg-info">
                    <a class="navbar-brand text-white col" style="font-size: 1.5em; font-weight: 500;">Ingresa tu E-Mail</a>
                    <form class="form-row" method="POST" action="form2.php">
                    
                        <input id="INEM1" name="email1" class="form-control col" type="search" placeholder="Email" style="text-transform:lowercase" aria-label="Search"/>
                        <input id="BOEM1" type="submit" value="Revisar" class="btn btn-success float-xl-right" disabled/>  
                        
                    </form>
                    <br>
                </nav>   
                <br>
                
                <?php include 'table.php' ?>

            </div>
        </div>
        <footer id="Foot2">
            <nav id="NAVX" class="navbar navbar-expand-xl navbar-dark bg-info">
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
            <nav id="NAVX" class="navbar navbar-expand-xl navbar-dark bg-info">
                <div class="mx-auto" style="width: 130px;">
                    <h6 style="color: #FFF">#NoSalgasDeCasa</h6>
                </div>      
            </nav>
        </footer>
    </body>
    <script type="text/javascript">

        $(document).ready('#BOEM1',function() {
            var CAN2 = $('#INEM1').val();
            
            if(CAN2==0){
                $('#BOEM1').attr('disabled', true);
            }
        });
        
        $(document).on('keyup', '#INEM1', function(){
            var CAN2 = $('#INEM1').val();
            if(CAN2!=0){
                $('#BOEM1').attr('disabled', false); 
            }
        });
        $(document).on('keyup', '#INEM1',function(){
            var CAN2 = $('#INEM1').val();
            if(CAN2==0){
                $('#BOEM1').attr('disabled', true); 
            }
        });

    </script>
</html>