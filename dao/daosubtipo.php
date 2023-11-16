
<?php

include_once('db.php');

$area=$_GET['tipo'];

Contador($area);

function Contador($area){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `Sub-Tipo` FROM `Tipos`where `Tipo` = '$area' GROUP by `Sub-Tipo`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>