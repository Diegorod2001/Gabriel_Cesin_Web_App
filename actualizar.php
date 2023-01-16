<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM lista_inventario WHERE codigo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
       <div class="container mt-5">
            <input type="hidden" name="codigo" value=" <?php echo $row['codigo'] ?>">

           <form action="update.php" method="POST">
            
            <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo" value="<?php echo $row['codigo'] ?>">
            
            <input type="text" class="form-control mb-3" name="producto" placeholder="Producto" value="<?php echo $row['producto'] ?>">
            <input type="text" class="form-control mb-3" name="inventario_inicial" placeholder="Inventario Inicial" value="<?php echo $row['inventario_inicial'] ?>">
            <input type="text" class="form-control mb-3" name="entradas" placeholder="Entradas" value="<?php echo $row['entradas'] ?>">
            <input type="text" class="form-control mb-3" name="salidas" placeholder="Salidas" value="<?php echo $row['salidas'] ?>">
            <input type="text" class="form-control mb-3" name="disponibles" placeholder="Disponibles" value="<?php echo $row['disponibles'] ?>">
            

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

           </form>
       </div>
</body>
</html>