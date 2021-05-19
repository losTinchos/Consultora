<?php

require_once("Components/Layout.php");

?>

<body>
    <?php
        require_once("Components/Header.php");
    ?>

<div class="col-md-4 m-5">
    <form action='?action=store' method="post">
        <fieldset>
            <legend>Introduzca sus datos para concertar una cita:</legend>
            <input style="display: none;" type="text" class="form-control mb-3" name="id" placeholder="Id">
            <label for="fname" id="titulo">Nombre:</label>
            <input type="text" class="form-control mb-3" style="background-color:#d3c199;" name="nombre"> <br>
            <input style="display: none;" type="text" class="form-control mb-3" name="fecha" placeholder="fecha"><br>
            <label for="fname" id="titulo">Tema:</label>
            <input type="text" class="form-control mb-3" style="background-color:#d3c199;" name="tema">
                <input href="?action=create" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Enviar">
                <input class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="reset" value="Reset">
            </fieldset>
    </form>
    <?php echo "<a href=\"index.php\">Vuelve a la lista</a>"; ?>
</div>
