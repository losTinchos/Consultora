<?php
require_once("./src/Views/Components/Layout.php");

?>


<body>

<?php
require_once("Components/Header.php");
?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">fecha</th>
                            <th scope="col">tema</th>
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
                        

                         <!-- <td><a href="./src/actualizar.php?id=" class="btn btn" style="background-color:#a2d5d8;">✏️</a></td>
                            <td><a href="./src/delete.php?id=" class="btn btn" style="background-color:#e9c16a;"></a></td>  -->

                    </tbody>
                </table>
                <a href="./src/Views/CreateCoder.php" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Crear Cita">Crear cita</a>
            </div>
        </div>
</div>

    


</body>
</html>
