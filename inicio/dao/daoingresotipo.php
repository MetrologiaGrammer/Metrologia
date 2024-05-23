<?php

include_once('db.php');

$Ref = $_POST['Ref'];
$Tipo = $_POST['Tipo'];
$Subtipo= $_POST['SubTipo'];


cliente($Ref,$Tipo,$Subtipo);

function cliente($Ref,$Tipo,$Subtipo)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "INSERT INTO `Tipo`(`Ref`, `Tipo`, `SubTipo`) VALUES ('$Ref','$Tipo','$Subtipo')";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
}





