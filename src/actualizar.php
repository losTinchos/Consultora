<?php
    include("./conexion.php");
    $con = conectar();
    $id = $_GET['id'];
    $sql= "SELECT * FROM coders WHERE id = '$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>"></input>
                    <input type="text" class="form-control mb-3"  name="nombre" value="<?php echo $row['nombre'] ?>" >
                    <input type="text" class="form-control mb-3"  name="mail" value="<?php echo $row['mail'] ?>">
                    <input type="text" class="form-control mb-3"  name="tema" value="<?php echo $row['tema'] ?>">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
