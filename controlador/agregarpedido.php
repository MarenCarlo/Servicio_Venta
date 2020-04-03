<?php
    include 'conexion.php';

    if (strlen($_POST['NumCom1']) > 0 ){

        $NumCom = trim($_POST['NumCom1']);
        $NamCli = trim($_POST['NamClient1']);
        $CanCom = trim($_POST['CanComb']);
        $TotCom = trim($_POST['TotComb2']);
        $EmailC = trim($_POST['EmaComb1']);
        $TelefC = trim($_POST['TelComb1']);
        $StatPe = "1";

        $consulta = "INSERT INTO `pedidos` 
                                (`idPedido`, `NombreCliente`, `FK_Combos`, `Cantidad`, 
                                `Total_Compra`, `Email`, `NumeroTelefonico`, `FK_Estados`)
                     VALUES (NULL, '$NamCli', '$NumCom', '$CanCom', '$TotCom', '$EmailC', '$TelefC', '$StatPe');";

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            header('Location: ../index.php');
        }else{
            echo 'No se ingreso nada';
        }
        $conexion->close();
    }
    

?>