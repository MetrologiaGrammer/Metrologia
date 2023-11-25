
<?php

include_once('db.php');

$idreferncia=$_GET['idreferencia'];

Contador($idreferncia);

function Contador($idreferncia){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Equipo` WHERE `IdEquipo` = '$idreferncia';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

