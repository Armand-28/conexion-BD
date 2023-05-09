<?php

include("conexion.php");

$con = conexion();

$id = $_GET['id'];

$sql = "SELECT * FROM datos WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar usuarios</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="formulario" style="margin:auto; left:0px;">
        <form action="editar.php" method="post">
            <h2>Editar usuario</h2>
            <div>
                <label for=""><input type="hidden" name="id" value="<?= $row['id']?>"></label>
            </div>
            <div>
                <label for="">Codigo del producto <br><input type="text" name="codigo" value="<?= $row['codigo'] ?>"/></label>
            </div>
            <div>
                <label for="">Nombre del producto <br><input type="text" name="nombre" value="<?= $row['nombre'] ?>" /></label>
            </div>
            <div>
                <label for="">Descripcion <br> <input type="text" name="descripcion" value="<?= $row['descripcion'] ?>" ></label>
            </div>
        <input type="submit" name="enviardatos"  class="enviar" value="Actualizar información">
        <button><a href="#">Mostrar</a></button>
        </form>
    </div>
  </body>
</html>