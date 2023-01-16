<?php

include("conexion.php");
$con=conectar();



$codigo=$_POST["codigo"];
$producto=$_POST["producto"];
$inventario_inicial=$_POST["inventario_inicial"];
$entradas=$_POST["entradas"];
$salidas=$_POST["salidas"];
$disponibles=$_POST["disponibles"];

$sql="UPDATE lista_inventario SET codigo='$codigo',producto='$producto',inventario_inicial='$inventario_inicial' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

  if($query){
    Header("Location: crud.php");
}
?>