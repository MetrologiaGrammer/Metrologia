
<?php

include_once('db.php');

$idreferncia=$_GET['referencia'];

Contador($idreferncia);

function Contador($idreferncia){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `Tipo`,COUNT(`Tipo`) AS Contador FROM `Equipo` GROUP BY `Tipo`;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

