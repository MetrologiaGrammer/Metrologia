
<?php

include_once('db.php');

Contador();

function Contador($area){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT Proceso FROM `Areas` GROUP BY `Proceso`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>