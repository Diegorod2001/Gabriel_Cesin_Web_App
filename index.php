<?php

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRISMAR</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <script src="Script.js"></script>
    <header>
        <div class="container">
            <p class="logo">CRISMAR</p>
            <nav>
                <a href="#hero">Inicio</a>
                <a href="#Somos-Crismar">Nosotros</a>
                <a href="#Nuestros-Productos">Nuestros Productos</a>
                <a href="#Pagos">Metodos de Pagos</a>
                <a href="contactanos.php">Contactanos</a>
                <a href="login.php">Iniciar Sección</a>

            </nav>
        </div>
    </header>
    <section id="hero">
        <h1>Tus Compras Online <br>Al mejor Precio</h1>
         
    </section>
    
    <section id="Somos-Crismar">
        
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">
                <h2>Somos CRISMAR</h2>
                <p>La empresa CRISMAR empezó sus inicios en el año 2007 como un negocio familiar, su nombre se debe a los dueños Cristian y Marlenys. Actualmente vendemos Ropa para todas las personas y productos de skincare para el cuidado de la piel.</p>

            </div>

        </div>
        
    </section>
    
    <section id="Nuestros-Productos">
        <div class="container">
            <h2>Nuestros Productos</h2>
            
            <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="img/camisamanN.jpg" class="u-full-width">
                        <div class="info-card">
                            <h4>CAMISA H&M 18$ TALLA S Y M</h4>
                            <p>Talla S y M</p>
                            <p class="precio">20$ <span class="u-pull-right">15$</span></p>
                            <a class="btn btn-warning" href="articulo1.php">Comprar</a>

                        </div>
                    </div>
                </div>

                <div class="four columns">
                    <div class="card">
                        <img src="img/blusaZ.jpg" class="u-full-width">
                        <div class="info-card">
                            <h4>BLUSA ZARA 18$ TALLA S Y M</h4>
                            <p>Talla L y M</p>
                            <p class="precio">25$ <span class="u-pull-right">18$</span></p>
                            <a class="btn btn-warning" href="articulo2.php">Comprar</a>

                        </div>
                    </div>
                </div>

                <div class="four columns">
                    <div class="card">
                        <img src="img/unisex.jpg" class="u-full-width">
                        <div class="info-card">
                            <h4>Sueter ZARA 22$  </h4>
                            <p>Talla S y M</p>
                            <p class="precio">20$ <span class="u-pull-right">15$</span></p>
                            <a class="btn btn-warning" href="articulo3.php">Comprar</a>

                        </div>
                    </div>
                </div>

                

               

            </div> 

           
            

        </div>
        
    </section>

    <section id="Pagos">
        <div class="container">
            <ul>
                <li>Nuestros Metodos De Pagos Son: <br> Pago Movil. <br> Transferencia. <br> Paypal  </li>
             </ul>
        </div>
        <a href="https://wa.me/5804123968146" target="_blank"> <img src="img/whatsapp-fill.svg" style="width: 30px; height: 30px;  "></a>
        <a href="#" target="_blank"> <img src="img/instagram-line.svg" style="width: 30px; height: 30px;  "></a>

    </section>
  
    
    <footer>
        <div class="container">
            <p>&copy; Crismar C.A 2023 by Gabriel Cesin</p>
        
        </div>
    </footer>
</body>
</html>