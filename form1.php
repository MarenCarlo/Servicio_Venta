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
                            <a class="nav-link" href="index.php">Menu Principal</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="form2.php">Tus Ordenes</a>
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

        <div style="margin-top: 16px;">
            <nav id="Menu1" class="navbar bg-info navbar-expand-xl navbar-dark">       
                <div class="mx-auto">
                    <h4 class="text-white">.:Formulario de Orden:.</h4>
                </div>
            </nav>
        </div>
        
        <?php
            if (strlen($_POST['Com1']) > 0 ){
                $Comb1 = trim($_POST['Com1']);
            }
        ?>
        <div class="container">
            <div id="Form1" class="container">
            <br>
            <form method="POST" action="controlador/agregarpedido.php">
            <input name="NumCom1" type='text' value="<?php echo $Comb1?>" hidden/>
            <div class="form-row">

                <div class="col">
                <label for="validationTooltip01">Nombre Completo</label>
                    <input  name="NamClient1" type="text" class="form-control" id="validationTooltip01" placeholder="Nombres y Apellidos Aqui" required>
                    <div class="invalid-tooltip">
                        Please provide a valid name.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Precio de la orden</label>
                <?php
                        if($Comb1 == "1"){
                            echo("<input id='PreU1' type='text' class='form-control' id='validationTooltip05' value='35.00' disabled required>");
                        }
                        if($Comb1 == "2"){
                            echo("<input id='PreU1' type='text' class='form-control' id='validationTooltip05' value='40.00' disabled required>");
                        }
                        if($Comb1 == "3"){
                            echo("<input id='PreU1' type='text' class='form-control' id='validationTooltip05' value='50.00' disabled required>");
                        }
                    ?>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
                </div>

                
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Menu a Ordenar</label>
                        <?php
                            if($Comb1 == "1"){
                                echo("<input type='text' class='form-control' id='validationTooltip05' value='Combo Wrap Menor' disabled required>");
                            }
                            if($Comb1 == "2"){
                                echo("<input type='text' class='form-control' id='validationTooltip05' value='Combo Wrap Mayor' disabled required>");
                            }
                            if($Comb1 == "3"){
                                echo("<input type='text' class='form-control' id='validationTooltip05' value='Combo Deluxe' disabled required>");
                            }
                        ?>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col">
                    <label for="validationTooltip01">Tiempo Estimado (minutos)</label>
                    <?php
                        if($Comb1 == "1"){
                            echo("<input id='TimE1' type='text' class='form-control' id='validationTooltip05' value='10 minutos' disabled required>");
                        }
                        if($Comb1 == "2"){
                            echo("<input id='TimE1' type='text' class='form-control' id='validationTooltip05' value='20 minutos' disabled required>");
                        }
                        if($Comb1 == "3"){
                            echo("<input id='TimE1' type='text' class='form-control' id='validationTooltip05' value='25 minutos' disabled required>");
                        }
                    ?>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip01">Cantidad</label>
                            <input name='CanComb' id='Cant1' type='number' class='form-control' id='validationTooltip05' value='1' required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationTooltip01">Total de Compra</label>
                            <input name='TotComb2' id='Tota1' type='text' class='form-control' id='validationTooltip05' value='' required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        
                    </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip02">Correo Electronico</label>
                        <input id="email1" name="EmaComb1" type="email" class="form-control" id="validationTooltip02" placeholder="Example@Example.com"  style="text-transform:lowercase" required>
                        <div class="valid-tooltip">
                           Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltipUsername">Numero Telefonico</label>
                        <div class="input-group">
                            <input name="TelComb1" type="tel" class="form-control" value="+502 " id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <input name="StaComb1" type="text" value="Pendiente" hidden>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#staticBackdrop">
                    Realizar Pedido
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-white bg-info">
                            <h5 class="modal-title" id="staticBackdropLabel">Su Pedido Se Procesara a Continuacion</h5>
                        </div>
                        <div class="modal-body">
                            Su Pedido empezara a realizarse cuando de click en el boton de Ingresar Orden!
                            Los tiempos de entrega son un aproximado, puede tardar 5 minutos mas en entregarse y es proporcional,
                            a la cantidad que usted ordene... Gracias por su comprension...
                        </div>
                        <div class="modal-footer text-white bg-info">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input id="BOT1" type="submit" value="Ingresar Orden" class="btn btn-success float-right"/> 
                        </div>
                        </div>
                    </div>
                </div>





            </form>
            <br>
            <br>
            </div>
        </div>
        <footer id="Foot2">
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

    <script type="text/javascript">
        $(document).ready(function() {

            var CAN1 = $('#Cant1').val();
            var TOT1 = $('#PreU1').val();

            if($('#Cant1').val()>=1){
                $('#Tota1').val(CAN1*TOT1);
            }
        });
        $(document).on('click','#Cant1', function() {

            var CAN1 = $('#Cant1').val();
            var TOT1 = $('#PreU1').val();

            if($('#Cant1').val()>=1){
                $('#Tota1').val(CAN1*TOT1);
            }
        });
        $(document).on('keyup','#Cant1', function() {

            var CAN1 = $('#Cant1').val();
            var TOT1 = $('#PreU1').val();

            if($('#Cant1').val()>=1){
                $('#Tota1').val(CAN1*TOT1);
            }
        });
    </script>

    <script type="text/javascript">
        $(document).change('#Cant1', function() {

            var CAN1 = $('#Cant1').val();
            var TOT1 = $('#PreU1').val();

            if($('#Cant1').val()>=1){
                $('#Tota1').val(CAN1*TOT1);
            }
        });
        $(document).change('#BOT1', function() {

            var CAN1 = $('#Cant1').val();
            var TOT1 = $('#PreU1').val();

            if($('#Cant1').val()>=1){
                $('#Tota1').val(CAN1*TOT1);
            }
        });
    </script>

</html>