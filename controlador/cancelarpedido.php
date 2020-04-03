<?php
        include 'conexion.php';

        if (strlen($_POST['IdCan1']) > 0 ){
    
                $IdAn1 = trim($_POST['IdCan1']);
        
                $consulta = "UPDATE `pedidos` SET `FK_Estados` = '3' WHERE `pedidos`.`idPedido` = ".$IdAn1.";";
    
                $resultado = mysqli_query($conexion, $consulta);
        
                if ($resultado){
                        header('Location: ../form2.php');
                }else{
                        echo 'No se ingreso nada';
                }
                $conexion->close();
        }
?>