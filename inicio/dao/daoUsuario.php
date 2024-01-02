
<?php

include_once('db.php');

$Nomina=$_GET['nomina'];

Contador($Nomina);

function Contador($Nomina){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `Usuarios` WHERE `IdUsuario` = '$Nomina';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>