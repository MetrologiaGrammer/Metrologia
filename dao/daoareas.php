
<?php

include_once('db.php');

$area=$_GET['area'];

Contador($area);

function Contador($area){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Areas` WHERE `Proceso` = '$area';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>