
<?php

include_once('db.php');

$Referencia=$_GET['ref'];

Contador($Referencia);

function Contador($Referencia){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Tipo` WHERE `Ref` = '$Referencia' GROUP by `Tipo`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>