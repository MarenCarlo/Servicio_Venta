<?php 
    $usuario = "MarenCarlo";
    $puerto = "3308";
    $contrasena = "";
    $Servidor = "localhost";
    $basededatos = "zacapaneca";

    $conexion = mysqli_connect($Servidor.":".$puerto, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de Base de datos...");

    $db = mysqli_select_db($conexion, $basededatos) or die ("Asegurese que el nombre de la base de datos es correcto, o que esta existe...");
?>