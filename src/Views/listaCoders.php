<?php
require_once("./src/Views/Components/Layout.php");

?>

<body style="background-color: #F9F1BC;">

<?php require_once("Components/Header.php"); ?>

<div class="container mt-5 p-4 d-flex justify-content-center " style="background-color: #FCCE78;">
    <div class="row-1 d-flex justify-content-center">
        <div class="col-md-9">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">fecha</th>
                        <th scope="col">tema</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($coderList as $coder) { 
                    echo "    
                    <tr>
                        <td>{$coder->getId()}</td>
                        <td>{$coder->getName()}</td>
                        <td>{$coder->getDate()}</td>
                        <td>{$coder->getTema()}</td>
                        <td>
                        <a href='?action=edit&id={$coder->getId()}'>✏️</a>
                        <a href='?action=delete&id={$coder->getId()}'>❌</a>
                        </td>
                    </tr>
                    ";
                    } ?>
                </tbody>
            </table> 
            <a href="?action=create" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Crear Cita">Crear cita</a>
        </div>
    </div>
</div>
</body>
</html>
