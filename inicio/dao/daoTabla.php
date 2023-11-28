
<?php

include_once('db.php');

Contador();

function Contador(){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdEquipo`,`Tipo`,`AreaProceso`,`MaqLinea`,`FechaInspeccion`,`FechaVencimiento`,CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/consultaEquipo.html?ID=',`IdEquipo`,'\" class=\"btn btn-primary\">ENTRAR</a>') AS boton FROM `Equipos` WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

