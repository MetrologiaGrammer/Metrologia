<?php

include_once('db.php');

$Proceso = $_POST['Proceso'];
$Linea = $_POST['Linea'];
$Operacion= $_POST['Operacion'];


cliente($Proceso,$Linea,$Operacion);

function cliente($Proceso,$Linea,$Operacion)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "INSERT INTO `Areas`(`Proceso`, `Linea`, `OpEstacion`) VALUES ('$Proceso','$Linea','$Operacion')";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
}





