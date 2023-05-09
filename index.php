<?php
include("conexion.php");

$con = conexion();

$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD numero 1</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
      <div class="formulario">
      <form action="insert.php"  name="crud" method="post">
        <div>
          <label for="">Codigo del producto <br><input type="text" name="codigo" placeholder="Inserte el id del producto" /></label>
        </div>
        <div>
          <label for="">Nombre del producto <br><input type="text" name="nombre" placeholder="Nombre del producto" /></label>
        </div>
        <div>
          <label for="">Descripcion <br> <input type="text" name="descripcion"></label>
        </div>
        <input type="submit" name="enviardatos"  class="enviar" value="Enviar datos">
        <button><a href="mostrar.php" target="_blank">Mostrar</a></button>
      </form>
    </div>
  </body>
</html>