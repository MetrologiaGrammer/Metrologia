
<?php

include_once('db.php');

$referencia=$_GET['id'];

Contador($referencia);

function Contador($referencia){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Documentacion` WHERE `Referencia` = '$referencia' order by `IdDocumento` LIMIT 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}

?>