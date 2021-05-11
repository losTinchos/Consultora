<?php

include('../src/conexion.php');

$con = conectar();

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$fecha = $_POST["fecha"];
$tema = $_POST["tema"];


$sql = "INSERT INTO coders VALUES ('$id', '$nombre', '$mail', '$fecha', '$tema')";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}


?>



