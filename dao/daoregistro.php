<?php


include_once('db.php');

$Usuario = $_POST['usuario'];
$Password = $_POST['password'];
$Correo = $_POST['correo'];
$Cargo = $_POST['cargo'];
$Nombre = $_POST['nombre'];
$Area= $_POST['area'];

cliente($Usuario, $Password,$Correo,$Cargo,$Nombre,$Area);

function cliente($Usuario, $Password,$Correo,$Cargo,$Nombre,$Area)
{
    $con = new LocalConector();
    $conexion = $con->conectar();
    $consP = "INSERT INTO `Usuarios`(IdUsuario,Password,Correo,Nombre,Cargo,Area) VALUES ('$Usuario','$Password','$Correo','$Nombre','$Cargo','$Area')";
    $rsconsPro = mysqli_query($conexion, $consP);
    mysqli_close($conexion);
}





