
<?php

include_once('db.php');

Contador();

function Contador(){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdEquipo`,`Tipo`,`AreaProceso`,`AreaLinea`,`FechaVencimiento`,`CentroCosto`,`CodigoCosto`,`CostoCalibracion`,`Moneda`,CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/editarCosto.php?ID=',`IdEquipo`,'\" class=\"btn btn-primary\">Editar</a>') AS boton FROM `Equipo` WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

