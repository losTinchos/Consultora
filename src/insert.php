<?php

include('../src/conexion.php');

$con = conectar();


$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$tema = $_POST["tema"];


$sql = "INSERT INTO coders (nombre, mail, tema) VALUES ('$nombre', '$mail', '$tema')";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: http://localhost/Consultora/index.php");
}


?>



