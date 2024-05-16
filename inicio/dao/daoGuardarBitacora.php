<?php


include_once('db.php');

$IdEquipo = $_POST['idEquipo'];
$FechaVerificacion = $_POST['fechaVerificacion'];
$FechaInspeccion = $_POST['fechaInspeccion'];

cliente($IdEquipo, $FechaVerificacion,$FechaInspeccion);

function cliente($IdEquipo, $FechaVerificacion,$FechaInspeccion)
{
    $con = new LocalConector();
    $conexion = $con->conectar();

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $consP = "INSERT INTO `BitacoraCalibraciones`(`IdEquipo`, `FechaVerificacion`, `FechaInspeccion`, `FechaCambio`) VALUES ('$IdEquipo','$FechaVerificacion','$FechaInspeccion','$DateAndTime')";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
}





