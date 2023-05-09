<?php
include("conexion.php");
$con = conexion();

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE datos SET codigo='$codigo', nombre='$nombre', descripcion='$descripcion' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>