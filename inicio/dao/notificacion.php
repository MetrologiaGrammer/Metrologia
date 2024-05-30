
<?php

include_once('db.php');

Contador();

function Contador(){
    $con = new LocalConector();
    $conex=$con->conectar();
    $datos = mysqli_query($conex, "SELECT * FROM `Equipo` WHERE Notificacion = 0 and STR_TO_DATE( CONCAT(`FechaVencimiento`, '-01'), '%Y-%m-%d' ) < LAST_DAY(CURDATE());");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    $html = "<table border='1'>";
    $html .= "<tr>";
    $html .= "<th>ID</th>";
    $html .= "<th>Area Proceso</th>";
    $html .= "<th>Tipo</th>";
    $html .= "<th>SubTipo</th>";
    $html .= "<th>Area Linea</th>";
    $html .= "<th>Area Operacion</th>";
    $html .= "<th>Fecha de inspección</th>";
    $html .= "<th>Próxima fecha de inspección</th>";
    $html .= "</tr>";

    foreach($resultado as $fila){

        $html .= "<tr>";
        $html .= "<td>" . $fila['IdEquipo'] . "</td>";
        $html .= "<td>" . $fila['AreaProceso'] . "</td>";
        $html .= "<td>" . $fila['Tipo'] . "</td>";
        $html .= "<td>" . $fila['SubTipo'] . "</td>";
        $html .= "<td>" . $fila['AreaLinea'] . "</td>";
        $html .= "<td>" . $fila['AreaOperacion'] . "</td>";
        $html .= "<td>" . $fila['FechaInspeccion'] . "</td>";
        $html .= "<td>" . $fila['FechaVencimiento'] . "</td>";
        $html .= "</tr>";


        }

    $html .= "</table>";

    $datos_post = array(
        'html' => $html

    );

    // URL del archivo PHP a ejecutar
    $url = 'https://arketipo.mx/MailerMetrologiaNotificacion.php';

    // Inicializar cURL
    $curl = curl_init($url);

    // Configurar opciones de cURL
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($datos_post));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la solicitud y obtener la respuesta
    $respuesta = curl_exec($curl);

    // Cerrar la sesión de cURL
    curl_close($curl);

    // Imprimir la respuesta
    echo $respuesta;

    cliente($fila['IdEquipo']);

}

function cliente($IdEquipo){
    $con = new LocalConector();
    $conexion=$con->conectar();

    $consP="update `Equipo` set `Notificacion` = '1' WHERE `IdEquipo` = '$IdEquipo'";

    $rsconsPro=mysqli_query($conexion,$consP);
    mysqli_close($conexion);
    $userData = array();

    echo mysqli_num_rows($rsconsPro);

    if(mysqli_num_rows($rsconsPro) == 1){
        echo "{\"data\":[{\"estatus\":\"mal\"}]}";
    }
    else{
        echo "{\"data\":[{\"estatus\":\"bien\"}]}";
    }
}

?>