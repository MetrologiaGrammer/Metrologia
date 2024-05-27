<?php

include_once('db.php');

$con = new LocalConector();
$conex=$con->conectar();

$Object = new DateTime();
$Object->setTimezone(new DateTimeZone('America/Denver'));
$DateAndTime = $Object->format("Y/m/d h:i:s");

$referencia = $_POST['referencia'];
$Nombredoc = $_POST['nombredocumento'];

$target_dir = "../documentacion/$referencia/"; // especifica el directorio donde se subirá el archivo
//$doc = $_POST['doc'];
// verifica si el directorio existe, si no, lo crea
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// verifica si se subieron archivos
if (!empty($_FILES['archivos']['name'][0])) {
    // recorre cada archivo
    for ($i = 0; $i < count($_FILES['archivos']['name']); $i++) {
        $target_file = $target_dir . basename($_FILES["archivos"]["name"][$i]); // especifica la ruta del archivo a subir

        // intenta subir el archivo
        if (move_uploaded_file($_FILES["archivos"]["tmp_name"][$i], $target_file)) {
            $insertDocumento= "INSERT INTO `Documentacion`(`Nombre`, `Referencia`, `Fecha`, `TipoDocumento`) VALUES ('" . basename($_FILES["archivos"]["name"][$i]) . "','$referencia','$DateAndTime','$Nombredoc')";

            $rsinsertDocu=mysqli_query($conex,$insertDocumento);
            echo "El archivo ". basename( $_FILES["archivos"]["name"][$i]). " ha sido subido.";
        } else {
            echo "Lo siento, hubo un error subiendo el archivo ". basename( $_FILES["archivos"]["name"][$i]). ".";
        }
    }
} else {
    echo "No se subieron archivos.";
}

mysqli_close($conex);

echo '<script type="text/javascript">
           window.location = "../documentacionEquipo.html"
      </script>';


?>