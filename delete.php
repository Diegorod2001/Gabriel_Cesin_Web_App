<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM lista_inventario WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: crud.php");

}
?>