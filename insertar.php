<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST["codigo"];
$producto=$_POST["producto"];
$inventario_inicial=$_POST["inventario_inicial"];
$entradas=$_POST["entradas"];
$salidas=$_POST["salidas"];
$disponibles=$_POST["disponibles"];

$sql="INSERT INTO lista_inventario VALUES('$codigo','$producto','$inventario_inicial','$entradas','$salidas','$disponibles')";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: crud.php");
}else {

}
?>