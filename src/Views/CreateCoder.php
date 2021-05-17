<?php

require_once("./Components/Layout.php")

?>

<body>
    <?php
        require_once("./Components/Header.php");
    ?>

<div class="col-md-4">
    <form action='?action=store' method="POST">
        <fieldset>
            <legend>Introduzca sus datos para concertar una cita:</legend>
            <input style="display: none;" type="text" class="form-control mb-3" name="id" placeholder="Id">
            <label for="fname" id="titulo">Nombre:</label>
            <input type="text" class="form-control mb-3" style="background-color:#d3c199;" name="nombre"> <br>
            <input style="display: none;" type="text" class="form-control mb-3" name="fecha" placeholder="fecha"><br>
            <label for="disabledSelect" id="titulo">Tema:</label>
            <select id="disabledSelect" type="text" class="form-control mb-3" style="background-color:#d3c199;" name="tema" class="form-select">
                <option style="background-color:#a2d5d8;">Selecciona el tema</option>
                <option style="background-color:#a2d5d8;">Test</option>
                <option style="background-color:#a2d5d8;">bootstrap</option>
                <option style="background-color:#a2d5d8;">MVC</option>
                <option style="background-color:#a2d5d8;">Otros</option>
                <input href="?action=create" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Enviar">
        </fieldset>
    </form>
</div>
</body>