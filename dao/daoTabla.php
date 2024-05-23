
<?php

include_once('db.php');

Contador();

function Contador(){

    $con = new LocalConector();

    $conex=$con->conectar();

$query = "

        SELECT 

            `IdEquipo`,

            `Tipo`,

            `AreaProceso`,

            `AreaLinea`,

            `FechaInspeccion`,

            `FechaVencimiento`,

            `EspMin`,

            `EstadoCalibracion`,

            CASE 

                WHEN `EstadoCalibracion` = 0 THEN '<span class=\"badge badge-pill badge-primary\" style=\"background: goldenrod;\">En Tiempo</span>'

                WHEN `EstadoCalibracion` = 1 THEN '<span class=\"badge badge-pill badge-success\" style=\"background: green;\">Calibrado</span>'

                WHEN `EstadoCalibracion` = 2 THEN '<span class=\"badge badge-pill badge-warning\">Este mes</span>'

                ELSE '<span class=\"badge badge-pill badge-danger\" style=\"background: red;\">Vencido</span>'

            END AS `EstatusCalibracion`,

            CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/index.html?ID=', `IdEquipo`, '\" class=\"btn btn-primary\">ENTRAR</a>') AS boton 

        FROM 

            `Equipo` 

        WHERE 

            1;

    ";

    $datos = mysqli_query($conex, $query);

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

