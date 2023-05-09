<?php
function conexion(){
  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "crud"; 
  
  $connet = mysqli_connect($host, $user, $pass);
  
  mysqli_select_db($connet, $dbname);
  return $connet;
}
?>