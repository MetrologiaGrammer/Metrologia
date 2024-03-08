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

$Nominal= $_POST['nominal'];
$Maxima= $_POST['maxima'];
$Minima= $_POST['minima'];

$Rango= $_POST['rango'];
$Frecuencia= $_POST['frecuencia'];
$Numserie= $_POST['numserie'];
$Numparte= $_POST['numparte'];

$Target= $_POST['target'];
/*$Color= $_POST['color'];
$Cliente= $_POST['cliente'];
$Plataforma = $_POST['plataforma'];
$Vendedor = $_POST['vendedor'];
$ColorM = $_POST['colormaster'];
$Numcolor = $_POST['numColor'];*/
$Status = $_POST['status'];
$Observaciones= $_POST['observaciones'];
$Imagen= $_POST['imagen'];

cliente($Nomina, $Nombre,$Area,$Referencia,$Tipo,$Subtipo,$Proceso,$Linea,$Operacion,$Fechacalibracion,$Fechavencida,$Resolucion,$Rango,$Frecuencia,$Numserie,$Numparte,$Status,$Nominal,$Observaciones,$Target,$Maxima,$Minima,$Imagen);

function cliente($Nomina, $Nombre,$Area,$Referencia,$Tipo,$Subtipo,$Proceso,$Linea,$Operacion,$Fechacalibracion,$Fechavencida,$Resolucion,$Rango,$Frecuencia,$Numserie,$Numparte,$Status,$Nominal,$Observaciones,$Target,$Maxima,$Minima,$Imagen)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "UPDATE `Equipo` SET `Observaciones`='$Observaciones',`Status`='$Status',`Resolucion`='$Resolucion',`NumParte`='$Numparte',`Descripcion`='',`Nominal`='$Nominal',`TolMax`='',`TolMin`='',`EspMin`='$Minima',`EspMax`='$Maxima',`Caracteristica`='',`FechaInspeccion`='$Fechacalibracion',`Frecuencia`='$Frecuencia',`FechaVencimiento`='$Fechavencida',`AreaProceso`='$Proceso',`Tipo`='$Tipo',`SubTipo`='$Subtipo',`NumSerie`='$Numserie',`AreaLinea`='$Linea',`AreaOperacion`='$Operacion',`Rango`='$Rango',`Ntarget`='$Target' WHERE `IdEquipo`='$Referencia'";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);

    $imagenCodificada = $Imagen; //ejemplo de imagen en base64
    $imagenDecodificada = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagenCodificada));
    $nombreArchivo = "imagen.png";
    $rutaArchivo =  __DIR__ . "/../images/".$Referencia.".jpg";
    file_put_contents($rutaArchivo, $imagenDecodificada);
}





