<?php

require_once("Components/Layout.php");

?>

<body style="background-color: #F9F1BC;">
    <?php require_once("Components/Header.php"); ?>

<section class="container d-flex justify-content-center">
    <div class="col-md-4 m-5 p-4" style="background-color: #FCCE78;">
        <form action='?action=store' method="post">
            <fieldset class="p-3">
                <legend>Introduzca sus datos para concertar una cita:</legend>
                <input style="display: none;" type="text" class="form-control mb-3" name="id" placeholder="Id">
                <label for="fname" id="titulo">Nombre:</label>
                <input type="text" class="form-control mb-3" name="nombre"> <br>
                <input style="display: none;" type="text" class="form-control mb-3" name="fecha" placeholder="fecha"><br>
                <label for="fname" id="titulo">Tema:</label>
                <input type="text" class="form-control mb-3" name="tema">
                    <input href="?action=create" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Enviar">
                    <input class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="reset" value="Reset">
            </fieldset>
            <a href="index.php"><button class="btn btn-outline-dark shadow rounded mt-1 ms-3" style="background-color:#e9c16a;" type="button">Volver</button></a>
        </form>
    </div>
</section>
