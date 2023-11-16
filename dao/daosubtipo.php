
<?php

include_once('db.php');

$Subtipo=$_GET['subtipo'];

Contador($Subtipo);

function Contador($Subtipo){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Tipo` where `Tipo` = '$Subtipo';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>