
<?php

include_once('db.php');

$tipoEquipo=$_GET['tipoEquipo'];

Contador($tipoEquipo);

function Contador($tipoEquipo){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdEquipo` FROM `Equipos` WHERE `IdEquipo` LIKE '%$tipoEquipo%' ORDER BY `IdEquipo` desc LIMIT 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>