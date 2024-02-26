
<?php

include_once('db.php');

Contador();

function Contador(){
    $con = new LocalConector();
    $conex=$con->conectar();
    $datos = mysqli_query($conex, "SELECT * FROM `Equipo` WHERE STR_TO_DATE(    CONCAT('01-',        CASE            WHEN `FechaVencimiento` LIKE '%enero%' THEN REPLACE(`FechaVencimiento`, 'enero', 'january')           WHEN `FechaVencimiento` LIKE '%febrero%' THEN REPLACE(`FechaVencimiento`, 'febrero', 'february')            WHEN `FechaVencimiento` LIKE '%marzo%' THEN REPLACE(`FechaVencimiento`, 'marzo', 'march')            WHEN `FechaVencimiento` LIKE '%abril%' THEN REPLACE(`FechaVencimiento`, 'abril', 'april')            WHEN `FechaVencimiento` LIKE '%mayo%' THEN REPLACE(`FechaVencimiento`, 'mayo', 'may')            WHEN `FechaVencimiento` LIKE '%junio%' THEN REPLACE(`FechaVencimiento`, 'junio', 'june')            WHEN `FechaVencimiento` LIKE '%julio%' THEN REPLACE(`FechaVencimiento`, 'julio', 'july')            WHEN `FechaVencimiento` LIKE '%agosto%' THEN REPLACE(`FechaVencimiento`, 'agosto', 'august')            WHEN `FechaVencimiento` LIKE '%septiembre%' THEN REPLACE(`FechaVencimiento`, 'septiembre', 'september')            WHEN `FechaVencimiento` LIKE '%octubre%' THEN REPLACE(`FechaVencimiento`, 'octubre', 'october')            WHEN `FechaVencimiento` LIKE '%noviembre%' THEN REPLACE(`FechaVencimiento`, 'noviembre', 'november')            WHEN `FechaVencimiento` LIKE '%diciembre%' THEN REPLACE(`FechaVencimiento`, 'diciembre', 'december')        END    ), '%d-%M-%y') < CURDATE();");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    foreach($resultado as $fila){

            $datos_post = array(
                'idequipo' => $fila['IdEquipo'],
                'observaciones' => $fila['Observaciones'],
                'status' => $fila['Status'],
                'resolucion' => $fila['Resolucion'],
                'numParte' => $fila['NumParte'],
                'fechaInspeccion' => $fila['FechaInspeccion'],
                'frecuencia' => $fila['Frecuencia'],
                'fechaVencimiento' => $fila['FechaVencimiento'],
                'areaProceso' => $fila['AreaProceso'],
                'tipo' => $fila['Tipo'],
                'subTipo' => $fila['SubTipo'],
                'numSerie' => $fila['NumSerie'],
                'areaLinea' => $fila['AreaLinea'],
                'areaOperacion' => $fila['AreaOperacion'],
                'rango' => $fila['Rango'],
                'centroCosto' => $fila['CentroCosto'],
                'costoCalibracion' => $fila['CostoCalibracion'],

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

            // cliente($fila['IdBitacora']);
        }

}

function cliente($Bitacora){
    $con = new LocalConector();
    $conexion=$con->conectar();

    $consP="update `BitacoraBonosSalida` set `Notificacion` = '1' WHERE `IdBitacora` = '$Bitacora'";

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