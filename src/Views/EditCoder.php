<?php require_once("Components/Layout.php"); ?>


<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">
        <div class="col-md-4 m-5">
        <legend>Edite su cita:</legend>
            <form action='?action=update&id=<?php echo $data["coder"]->getId() ?>' method="post">
                <input class="form-control mb-3" style="background-color:#d3c199;"type="text" name="nombre" required value='<?php echo $data["coder"]->getName() ?>'>
                <input class="form-control mb-3" style="background-color:#d3c199;"type="text" name="tema" required value='<?php echo $data["coder"]->getTema() ?>'>
                <input type="submit" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" value="Edit">
                <input type="reset" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" value="Reset">
            </form>
        </div>
    </main>

</body>