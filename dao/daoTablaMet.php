
<?php

include_once('db.php');

Contador();

function Contador(){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdEquipo`,`Observaciones`,`Status`,`Tipo`,`AreaProceso`,`AreaLinea`,`AreaOperacion`,`FechaInspeccion`,`FechaVencimiento`,`EspMin`,`EspMax`,CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/editarEquipo.php?ID=',`IdEquipo`,'\" class=\"btn btn-SUCCESS\">EDITAR</a>') AS boton FROM `Equipo` WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

