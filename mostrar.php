<?php
include("conexion.php");

$con = conexion();

$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
     <!-- tabla para mostrar los datos -->
     <div>
      <h2>productos registrados</h2>
      <table >
        <thead>
          <tr>
            <th>Id</th>
            <th>Codigo del producto</th>
            <th>Nombre del producto</th>
            <th>Descripcion del producto</th>

            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($query)): ?>
          <tr>

            <th> <?= $row['id']?> </th>
            <th> <?= $row['codigo']?> </th>
            <th> <?= $row['nombre']?> </th>
            <th> <?= $row['descripcion']?></th>

            <th><a href="update.php?id=<?= $row['id']?>" class="editar">Editar</a></th>
            <th><a href="delete.php?id=<?= $row['id'] ?>" class="eliminar">Eliminar</a></th>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
</body>
</html>