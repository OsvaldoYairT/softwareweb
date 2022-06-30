<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "usuarios";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    mysqli_set_charset($conn, "utf8");
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["usuarios"];
$pass = $_POST["contraseñas"];

$query = mysqli_query($conn,"SELECT * FROM user WHERE Correo = '".$nombre."' and Contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: index.html");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}