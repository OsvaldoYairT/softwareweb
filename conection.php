<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="usuarios";

    $con=mysqli_connect($host,$user,$pass);
    mysqli_set_charset($con, "utf8");
    mysqli_select_db($con,$bd);

    return $con;
}
?>