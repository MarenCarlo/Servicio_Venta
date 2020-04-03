<head>
    <link href="css/responsivetable.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="js/responsivetable.js"></script>
</head>

<div>
    
    <?php 
        if(isset($_POST['email1'])) {
            $Email1 = $_POST['email1'];
    ?>

    <?php
        include 'controlador/conexion.php';
        $consulta1 = "  SELECT * FROM pedidos 
                        LEFT JOIN( combos CROSS JOIN estados ) 
                        ON( pedidos.FK_Combos = combos.idCombo 
                        AND pedidos.FK_Estados = estados.idEstado ) 
                        WHERE (pedidos.FK_Estados LIKE '%1%' OR '%2%') 
                        AND( pedidos.Email LIKE '".$Email1."')";

        $resultado = mysqli_query($conexion, $consulta1) or die ( "Algo ha ido mal en la consulta a la base de datos");
    ?>

    <!-- Responsive table starts here -->
    <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
    <div class="table-responsive-vertical shadow-z-1">
    <!-- Table starts here -->
        <table id="table" class="table table-hover table-mc-light-blue">
            <thead>
                <tr>
                    <th>Numero de Orden</th>
                    <th>Nombre de Cliente</th>
                    <th>Combo por Recibir</th>
                    <th>Tiempo de Espera</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Estado</th>
                    <th>Opcion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($columna = mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <?php
                        echo "<td data-title='Orden'>" . $columna['0'] . "</td>";
                    ?>
                    <?php
                        echo "<td data-title='Cliente'>" . $columna['1'] . "</td>";
                    ?>
                    <?php
                        echo "<td data-title='Combo'>" . $columna['9'] . "</td>";
                    ?>
                    <?php
                        echo "<td data-title='Tiempo'>" . $columna['10'] . "</td>";
                    ?>
                    <?php
                        echo "<td data-title='Cantidad'>" . $columna['3'] . "</td>";
                    ?>
                    <?php
                        echo "<td data-title='Total'>Q." . $columna['4'] . ".00</td>";
                    ?>
                    <?php
                        echo "<td data-title='Estado'>" . $columna['14'] . "</td>";
                    ?>
                    <?php
                        echo "
                        <td data-title='Cancelar Orden'>
                            <div class'col-6'></div>

                            <form class='col' method='POST' action='controlador/cancelarpedido.php'>
                                        
                                <input id='INNI1' name='IdCan1' class='form-control col-6' type='search' value='".$columna['0']."' hidden/>        
                                
                                <button type='button' class='btn btn-danger col' data-toggle='modal' data-target='#staticBackdrop'>
                                    Cancelar Pedido
                                </button>

                                <div class='modal fade' id='staticBackdrop' data-backdrop='static' tabindex='-1' role='dialog' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header text-white bg-info'>
                                                <h5 class='modal-title' id='staticBackdropLabel'>Cancelar Pedido!</h5>
                                            </div>
                                            <div class='modal-body'>
                                                Enserio deseas anular tu pedido y no degustar del exquisito sabor que nos caracteriza?
                                                Ten en cuenta que esto no se puede deshacer...
                                            </div>

                                            <div class='modal-footer text-white bg-info'>
                                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                                                <input id='BOTT1' type='submit' value='Estoy Seguro!' class='btn btn-danger col'/>   
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </td>
                        ";
                    ?>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
            $conexion->close();
        }   
        //condicional que me permite capturar el POST del mismo documento, sin tener 
        //que tener un valor inicial, me sirve para ejecutar la consulta de la tabla.
    ?>
</div>