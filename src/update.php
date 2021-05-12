<?php

    include("conexion.php");
    $con = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $fecha = $_POST['fecha'];
    $tema = $_POST['tema'];

    $sql = "UPDATE coders SET nombre = '$nombre', mail = '$mail', fecha = '$fecha', tema = '$tema' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: http://localhost/Consultora/index.php");
    }

?>