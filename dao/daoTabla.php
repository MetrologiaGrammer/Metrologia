
<?php

include_once('db.php');

Contador();

function Contador(){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdEquipo`,`Tipo`,`AreaProceso`,`AreaLinea`,`FechaInspeccion`,`FechaVencimiento`,`EspMin`,`EstadoCalibracion`,CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/index.html?ID=',`IdEquipo`,'\" class=\"btn btn-primary\">ENTRAR</a>') AS boton FROM `Equipo` WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

