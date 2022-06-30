<?php
include("conection.php");
$con=conectar();


$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];

$sql="INSERT INTO user VALUES('$Correo','$Contraseña')";
mysqli_set_charset($con, "utf8");
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: docentes.php");
    
}else {
}
?>