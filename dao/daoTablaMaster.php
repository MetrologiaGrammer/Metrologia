
<?php

include_once('db.php');

Contador();

function Contador(){

    $con = new LocalConector();

    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT `IdReferencia`,`NumParte`,`Plataforma`,`Cliente`,`Vendedor`,`Material`,`NombColor`,`NumColor`,`CodColor`,`Status`,`NumTarget`,`Vencimiento`,CONCAT('<a href=\"https://arketipo.mx/Metrologia/inicio/editarEquipo.php?ID=',`IdReferencia`,'\" class=\"btn btn-secondary\">EDITAR</a>') AS boton FROM `Master` WHERE 1;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    echo json_encode(array("data"=>$resultado));

}


?>

