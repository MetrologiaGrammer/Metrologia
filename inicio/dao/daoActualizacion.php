<?php


include_once('db.php');

$IdEquipo = $_POST['idequipo'];
$Nomina = $_POST['nomina'];
$Preoceso = $_POST['Proceso'];
$Linea = $_POST['linea'];
$Operacion = $_POST['operacion'];
$Imagen= $_POST['imagen'];
$Idimagen = $_POST['Idimagen'];

cliente($IdEquipo,$Nomina, $Preoceso,$Linea,$Operacion,$Imagen,$Idimagen);

function cliente($IdEquipo,$Nomina, $Preoceso,$Linea,$Operacion,$Imagen,$Idimagen)
{
    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "INSERT INTO `Historialcambios`( `IdEquipo`, `AreaProceso`, `Linea`, `Operacion`, `IdImagen`, `Nomina`,`Fecha`) VALUES ('$IdEquipo','$Preoceso','$Linea','$Operacion','$Idimagen','$Nomina','$DateAndTime')";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);

    $imagenCodificada = $Imagen; //ejemplo de imagen en base64
    $imagenDecodificada = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagenCodificada));
    $nombreArchivo = "imagen.png";
    $rutaArchivo =  __DIR__ . "/imagenActualizacion/".$Idimagen.".png";
    file_put_contents($rutaArchivo, $imagenDecodificada);

}