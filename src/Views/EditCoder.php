<?php require_once("Components/Layout.php"); ?>


<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">
        <div class="col-md-4">
            <form action='?action=update=<?php echo $data["coder"]->getId() ?>' method="post">
                <input type="text" name="nombre" required value='<?php echo $data["coder"]->getName() ?>'>
                <input type="submit" value="Edit">
                <input type="reset" value="Reset">
                <h2>Hola</h2>
            </form>
        </div>
    </main>

</body>