<?php
include("conexion.php");
$con = conexion();




$id = null;
$nombre = $_POST["nombre"];
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];

$sql = "INSERT INTO datos VALUES('$id', '$nombre', '$codigo', '$descripcion')";
$query = mysqli_query($con, $sql);


if ($query) {
   Header("location: index.php"); 
};


?>