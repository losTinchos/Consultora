<?php
include("./src/conexion.php");
$con = conectar();

$sql = "SELECT * FROM coders";
$query = mysqli_query($con, $sql);


?>

 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultora los Tinchos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="src/insert.php" method="POST">
                    <input style="display: none;"
                     type="text" class="form-control mb-3"  name="id" placeholder="Id">
                    <input type="text" class="form-control mb-3"  name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3"  name="mail" placeholder="mail">
                    <input style="display: none;"
                     type="text" class="form-control mb-3"  name="fecha" placeholder="fecha">
                    <input type="text" class="form-control mb-3"  name="tema" placeholder="tema">

                    <input type="submit" class="btn btn-primary btn-block">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">mail</th>
                            <th scope="col">fecha</th>
                            <th scope="col">tema</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)){ 
                            ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['mail'] ?></td>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['tema'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
</div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
