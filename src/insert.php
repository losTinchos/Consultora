<?php

include('../src/conexion.php');

$stmt = Conexion::conectar();

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$fecha = $_POST["fecha"];
$tema = $_POST["tema"];


$base = "INSERT INTO coders VALUES ('$id', '$nombre', '$mail', '$fecha', '$tema')";

$query = PDO($stmt, $base);

if($query){
    Header("Location: http://localhost/Consultora/index.php");
}


?>



