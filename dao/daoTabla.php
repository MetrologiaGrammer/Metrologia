
<?php

include_once('db.php');

$fechaCalibracion=$_GET['fechaCalibracion'];
$fechaVencimiento=$_GET['fechaVencimiento'];

Contador($fechaCalibracion,$fechaVencimiento);

function Contador($fechaCalibracion,$fechaVencimiento){

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
                    WHEN `EstadoCalibracion` = 0 THEN '<span class=\"badge badge-pill badge-primary\" style=\"background: goldenrod;\">On time</span>'
                    WHEN `EstadoCalibracion` = 1 THEN '<span class=\"badge badge-pill badge-success\" style=\"background: green;\">Completed</span>'
                    WHEN `EstadoCalibracion` = 2 THEN '<span class=\"badge badge-pill badge-warning\" style=\"background: goldenrod;\">On time</span>'
                    ELSE '<span class=\"badge badge-pill badge-danger\" style=\"background: red;\">late</span>'
                END AS `EstatusCalibracion`,
                CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/index.html?ID=', `IdEquipo`, '\" class=\"btn btn-info\">Document</a>') AS boton ,
                CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/consultaEquipo.html?ID=', `IdEquipo`, '\" class=\"btn btn-secondary\">Information</a>') AS boton2 
            FROM 
                `Equipo` 
            WHERE 
                1=1 ";

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

