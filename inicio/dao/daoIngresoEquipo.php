<?php


include_once('db.php');

$Nomina = $_POST['nomina'];
$Nombre = $_POST['nombre'];
$Area= $_POST['area'];
$Referencia= $_POST['referencia'];
$Tipo= $_POST['tipo'];
$Subtipo= $_POST['subtipo'];
$Proceso= $_POST['proceso'];
$Linea= $_POST['linea'];
$Operacion= $_POST['operacion'];
$Fechacalibracion= $_POST['fechacalibracion'];
$Fechavencida= $_POST['fechavencida'];
$Resolucion= $_POST['resolucion'];
$Rango= $_POST['rango'];
$Frecuencia= $_POST['frecuencia'];
$Numserie= $_POST['numserie'];
$Numparte= $_POST['numparte'];
$Status = $_POST['status'];
$Observaciones= $_POST['observaciones'];


cliente($Nomina, $Nombre,$Area,$Referencia,$Tipo,$Subtipo,$Proceso,$Linea,$Operacion,$Fechacalibracion,$Fechavencida,$Resolucion,$Rango,$Frecuencia,$Numserie,$Numparte,$Status,$Observaciones);

function cliente($Nomina, $Nombre,$Area,$Referencia,$Tipo,$Subtipo,$Proceso,$Linea,$Operacion,$Fechacalibracion,$Fechavencida,$Resolucion,$Rango,$Frecuencia,$Numserie,$Numparte,$Status,$Observaciones)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "INSERT INTO `Equipo`(`IdEquipo`, `Observaciones`, `Status`, `Resolucion`, `NumParte`
, `FechaInspeccion`, `Frecuencia`, `FechaVencimiento`, `AreaProceso`, `Tipo`, `SubTipo`
, `NumSerie`, `AreaLinea`, `AreaOperacion`,`Rango`) VALUES ('$Referencia','$Observaciones','$Status','$Resolucion','$Numparte','$Fechacalibracion','$Frecuencia'
,'$Fechavencida','$Proceso','$Tipo','$Subtipo','$Numparte','$Numserie','$Status','$Linea','$Operacion','$Rango')";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
}





