
<?php

include_once('db.php');

$idreferncia=$_GET['referencia'];

Contador($idreferncia);

function Contador($idreferncia){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Master` WHERE `IdReferencia` = '$idreferncia';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

