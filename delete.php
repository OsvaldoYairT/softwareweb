<?php

include("conexion.php");
$con=conectar();

$cod_estudiant=$_GET['id'];

$sql="DELETE FROM registros  WHERE Id='$cod_estudiant'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docentes.php");
    }
?>
