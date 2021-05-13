<?php


require_once "./src/conexion.php";
$stmt = Conexion::conectar();

//  $base = "SELECT * FROM coders";
//  $query = PDO ($stmt, $base);


?>

 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultora los Tinchos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">

</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e9c16a; width:100%">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" id="titulo" href="#">Consultoria Tinchos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" id="titulo" aria-current="page" href="#">Can Tinchos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" id="titulo" href="#">Sobre Nosotros</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="src/insert.php" method="POST">
                    <fieldset>
                    <legend>Introduzca sus datos para concertar una cita:</legend>
                    <input style="display: none;" type="text" class="form-control mb-3"  name="id" placeholder="Id">
                    <label for="fname" id="titulo">Nombre:</label>
                    <input type="text" class="form-control mb-3" style="background-color:#d3c199;" name="nombre"> <br>
                    <label for="lname" id="titulo">Mail:</label>
                    <input type="text" class="form-control mb-3" style="background-color:#d3c199;" name="mail" placeholder=""><br>
                    <input style="display: none;" type="text" class="form-control mb-3"  name="fecha" placeholder="fecha"><br>
                    <label for="disabledSelect" id="titulo">Tema:</label>
                    <select id="disabledSelect" type="text" class="form-control mb-3" style="background-color:#d3c199;" name="tema" class="form-select">
                    <option style="background-color:#a2d5d8;">Selecciona el tema</option>
                    <option style="background-color:#a2d5d8;">Test</option>
                    <option style="background-color:#a2d5d8;">bootstrap</option>
                    <option style="background-color:#a2d5d8;">MVC</option>
                    <option style="background-color:#a2d5d8;">Otros</option>
                    <input class="btn btn-outline-dark shadow rounded" style="background-color:#e9c16a;" type="submit" value="Enviar">
                </fieldset>
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
                            <td><a href="./src/actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn" style="background-color:#a2d5d8;">✏️</a></td>
                            <td><a href="./src/delete.php?id=<?php echo $row['id'] ?>" class="btn btn" style="background-color:#e9c16a;">❌</a></td>
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
