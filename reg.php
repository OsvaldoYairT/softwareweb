<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "docentes";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$estatuas = $_POST["estatus"];
$id = $_POST["id"];
$trab = $_POST["trab"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contra = $_POST["contraseña"];
$tel = $_POST["telefono"];
$usuario = $_POST["usuario"];
$fecha = $_POST["fecha"];


$query = mysqli_query($conn,"SELECT * FROM docentes WHERE estatus = '".$estatuas."' id = '".$id."' trab = '".$trab."' nombre = '".$nombre."' correo = '".$correo."' contraseña = '".$contra."' telefono = '".$tel."' usuario = '".$usuario."' and fecha = '".$fecha."'");
$nr = mysqli_num_rows($query);

