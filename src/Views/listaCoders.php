<?php
require_once("./src/Views/Components/Layout.php");

namespace App\Controllers;

use App\Views;
?>


<body>

<?php
require_once("./src/Views/Components/Header.php");
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
                            ?>
                        <tr>
                            <td><?php echo $coder->getId() ?></td>
                            <td><?php echo $coder->getName() ?></td>
                            <td><?php echo $coder->getDate() ?></td>
                            <td><?php echo $coder->getTema() ?></td>
                            <td><a href="./src/actualizar.php?id=" class="btn btn" style="background-color:#a2d5d8;">✏️</a></td>
                            <td><a href="./src/delete.php?id=" class="btn btn" style="background-color:#e9c16a;">❌</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
                <input href="?action=create" class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Crear Cita">
            </div>
        </div>
</div>

    


</body>
</html>
