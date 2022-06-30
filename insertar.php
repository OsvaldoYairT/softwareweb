<?php
include("conexion.php");
$con=conectar();

$Estatus=$_POST['Estatus'];
$Id=$_POST['Id'];
$Numtrab=$_POST['Numtrab'];
$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];
$Telefono=$_POST['Telefono'];
$Usuario=$_POST['Usuario'];
$Fecha=$_POST['Fecha'];

$sql="INSERT INTO registros VALUES('$Estatus','$Id','$Numtrab','$Nombre','$Correo','$Contraseña','$Telefono','$Usuario','$Fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: docentes.php");
    
}else {
}
?>