<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM lista_inventario";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Inventarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingresar Datos</h1>
                    <form action="insertar.php" method="POST">

                        <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo">
                        <input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
                        <input type="text" class="form-control mb-3" name="inventario_inicial" placeholder="Inventario Inicial">
                        <input type="text" class="form-control mb-3" name="entradas" placeholder="Entradas">
                        <input type="text" class="form-control mb-3" name="salidas" placeholder="Salidas">
                        <input type="text" class="form-control mb-3" name="disponibles" placeholder="Disponibles (stock)">

                        <input type="submit" class="btn btn-primary">
                        
                        
                    </form>
                
                </div>

                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Codigo</th>
                                <th>Producto</th>
                                <th>Inventario inicial</th>
                                <th>Entradas</th>
                                <th>Salidas</th>
                                <th>Disponibles (Stock)</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                               while($row=mysqli_fetch_array($query)){
                                ?>
                                  <tr>
                                    <th><?php echo $row["codigo"]?></th>
                                    <th><?php echo $row["producto"]?></th>
                                    <th><?php echo $row["inventario_inicial"]?></th>
                                    <th><?php echo $row["entradas"]?></th>
                                    <th><?php echo $row["salidas"]?></th>
                                    <th><?php echo $row["disponibles"]?></th>

                                    <th><a href="actualizar.php?id=<?php echo $row["codigo"] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row["codigo"] ?>" class="btn btn-danger">Eliminar</a></th>
                                  </tr>
                                  <?php
                                  
                               }
                               ?>

                        </tbody>
                        
                    </table>
                    <div class="reportes">
                    <a class="btn btn-warning" href="reportes.php">Imprimir Reporte</a>
                    <a class="btn btn-warning" href="reportes.php">Inventario de ventas realizadas</a>
                    
                    </div>

                </div>

                
            </div>
        </div>
        
</body>
</html>