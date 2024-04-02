
<?php

include_once('db.php');

$area=$_GET['proceso'];

Contador($area);

function Contador($area){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `AreaLinea`,COUNT(`IdEquipo`) as Conteo FROM `Equipo` GROUP BY `AreaLinea`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>