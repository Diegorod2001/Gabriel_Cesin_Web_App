<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crismar Compra</title>

    <link rel="stylesheet" href="articulos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


</head>
<body>
    <header>
        <div class="container">
            <p class="logo">CRISMAR</p>
            <nav>
                <a href="index.php">Cancelar Compra</a>

            </nav>
        </div>
    </header>

    <section id="visual-sueter">
        
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">
                <h2>Sueter ZARA UNISEX Por tan solo 22$</h2>
                <p>Descripción: Sueter Unisex de ZARA de color gris claro, tenemos disponibles en las siguientes tallas: <br> S,M,L,XL  </p>

            </div>

        </div>
        
    </section>

    <section id= "formulario-compra">

        <div id="wrapper">
            <h2>Realizar Compra</h2>
            <form action="https://formsubmit.co/gabrielcesin08@gmail.com" method="POST">
                <label for="nombre">Nombres Y Apellidos del Comprador</label>
                <input type="text" class="form-control mb-3" name="nombre">

                <label for="cedula"> Cédula del Comprador</label>
                <input type="text" class="form-control mb-3" name="cedula">

                <label for="correo">Correo electrónico</label>
                <input type="text" class="form-control mb-3" name="correo">

                <label for="numero">Número de Teléfono</label>
                <input type="text"  class="form-control mb-3" name="telefono">

                <label for="cantidad">Cantidad del Producto y Talla a elegir</label>
                <input type="text" class="form-control mb-3"  name="cantidad-talla" placeholder= "Disponible talla S (10) M (7) L (5) XL (3)">
                
                <label for="direccion">Dirección de envio</label>
                <input type="text"  class="form-control mb-3" name="direccion">

                <label for="envio">Escriba la empresa de envíos: MRW, ZOOM O Tealca</label>
                <input type="text" class="form-control mb-3"  name="envio">

                <label for="transferencia">Escriba el número del comprobante de pago</label>
                <input type="text"class="form-control mb-3" name="pago" >

                

                <input type="hidden" name="_next" value="http://localhost/proyecto_crismar/index.php">
                <input type="hidden" name="_captcha" value="false">

                <input type="submit" value="Confirmar">



            </form>
        </div>

    </section>

    <section id="whatsapp">
        <a href="https://wa.me/5804123968146?text= Necesito Información del Sueter Unisex de ZARA Por favor" target="_blank"> <img src="img/whatsapp-fill.svg" style="width: 80px; height: 80px;  "></a>
        <br><br>
    </section>




</body>
</html>