
<?php

include_once('db.php');

$fechaCalibracion=$_GET['fechaCalibracion'];
$fechaVencimiento=$_GET['fechaVencimiento'];

Contador($fechaCalibracion,$fechaVencimiento);

function Contador($fechaCalibracion,$fechaVencimiento){

    $con = new LocalConector();

    $conex=$con->conectar();

    $query = "SELECT 
    E.`IdEquipo`,
    E.`Tipo`,
    E.`AreaLinea`,
    E.`FechaInspeccion`,
    E.`FechaVencimiento`,
    E.`EspMin`,
    E.`EstadoCalibracion`,
    CASE 
        WHEN E.`EstadoCalibracion` = 0 THEN '<span class=\"badge badge-pill badge-primary\" style=\"background: goldenrod;\">On time</span>'
        WHEN E.`EstadoCalibracion` = 1 THEN '<span class=\"badge badge-pill badge-success\" style=\"background: green;\">Completed</span>'
        WHEN E.`EstadoCalibracion` = 2 THEN '<span class=\"badge badge-pill badge-warning\" style=\"background: goldenrod;\">On time</span>'
        ELSE '<span class=\"badge badge-pill badge-danger\" style=\"background: red;\">late</span>'
    END AS `EstatusCalibracion`,
    CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/index.html?ID=', E.`IdEquipo`, '\" class=\"btn btn-info\">Document</a>') AS boton ,
    CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/consultaEquipo.html?ID=', E.`IdEquipo`, '\" class=\"btn btn-secondary\">Information</a>') AS boton2,
    COALESCE(H.`AreaProceso`, E.`AreaProceso`) as `AreaProceso`,
    COALESCE(H.`Linea`, E.`AreaLinea`) as `Linea`
FROM 
    `Equipo` E
LEFT JOIN (
    SELECT H1.`IdEquipo`, H1.`AreaProceso`, H1.`Linea`
    FROM `Historialcambios` H1
INNER JOIN (
    SELECT `IdEquipo`, MAX(`IdHistorial`) as MaxIdHistorial
    FROM `Historialcambios`
    GROUP BY `IdEquipo`
    ) H2 ON H1.`IdEquipo` = H2.`IdEquipo` AND H1.`IdHistorial` = H2.MaxIdHistorial
) H ON E.`IdEquipo` = H.`IdEquipo`
WHERE 
    `Status`= 'Activo'";

    if ($fechaCalibracion != "n"){
        $query=$query." and FechaInspeccion = '$fechaCalibracion' ";
    }

    if ($fechaVencimiento != "n"){
        $query=$query." and FechaVencimiento = '$fechaVencimiento' ";
    }



    $datos = mysqli_query($conex, $query);

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

