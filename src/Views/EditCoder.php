<?php require_once("Components/Layout.php"); ?>

<body style="background-color: #F9F1BC;">
    <?php require_once("Components/Header.php"); ?>

<main class="container d-flex justify-content-center" >
    <div class="col-md-4 m-5 p-4" style="background-color: #FCCE78;">
        <legend>Edite su cita:</legend>
            <form action='?action=update&id=<?php echo $data["coder"]->getId() ?>' method="post">
                <input class="form-control mb-3" type="text" name="nombre" required value='<?php echo $data["coder"]->getName() ?>'>
                <input class="form-control mb-3" type="text" name="tema" required value='<?php echo $data["coder"]->getTema() ?>'>
                <input type="submit" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" value="Edit">
                <input class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type= "reset" value="Reset">
            </form>
        <a href="index.php"><button class="btn btn-outline-dark shadow rounded mt-2" style="background-color:#e9c16a;" type="button">Volver</button></a>
    </div>
</main>
</body>
