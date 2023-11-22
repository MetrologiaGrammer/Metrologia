
<?php

include_once('db.php');

$area=$_GET['area'];

Contador($area);

function Contador($area){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `Linea` FROM `Areas`where `Proceso` = '$area' GROUP by `Linea`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>