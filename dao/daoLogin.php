<?php


include_once('db.php');

function cliente($Nomina, $contra)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "SELECT * FROM `Usuarios` WHERE `IdUsuario` = '$Nomina' and `Password` = '$contra';";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
    $userData = array();

    if (mysqli_num_rows($rsconsPro) == 1) {
        return 1;
    } else {
        return 0;
    }
}





