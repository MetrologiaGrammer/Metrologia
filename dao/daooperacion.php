
<?php

include_once('db.php');

$area=$_GET['area'];
$proceso=$_GET['proceso'];

Contador($area,$proceso);

function Contador($area,$proceso){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `OpEstacion` FROM `Areas`where `Linea` = '$area' AND `Proceso` = '$proceso' GROUP by `OpEstacion`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>