<?php

include_once('db.php');

$Id = $_POST['id'];


cliente($Id);

function cliente($Id)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "DELETE FROM `Documentacion` WHERE `IdDocumento`='$Id'";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
}





