<?php

?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Contacto</title>
  </head>
  <body>

    <div class="container">
     <p class="logo">¿Tienes alguna duda o Problema?</p>
        <div class="row">
            <div class="col-md-12 pt-5">
                <form id="form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" class="form-control" id="correo">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje"  class="form-control"  rows="3"></textarea>
                        </div>
                        <div class="form-grop col-md-12">
                        <input type="submit" id="button" value="Enviar" >
                        </div>
                    </div>
                </form>
                <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                <script type="text/javascript">
                 emailjs.init('l62TF9yRnTSM1f9q6')
                </script>
            </div>
        </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>

        let formulario = document.getElementById('form');

        formulario.addEventListener('submit', e=>{
            e.preventDefault();

            let removerClase = document.querySelectorAll('.remover');

            if(removerClase.length > 0){
                
                for(let i = 0; i< removerClase.length; i++ ){
                    removerClase[i].parentNode.removeChild(removerClase[i])
                }
            }

            let datos = new FormData(formulario);

            let peticion = {
                method:'POST',
                body:datos,
            }

            fetch('contactanos.php',peticion)
                .then(respuesta => respuesta.json())
                .then(respuesta =>{
                    
                    for(const resultado in respuesta){
                        let padre = document.querySelector('#'+resultado);
                        padre.classList.add('resaltar');
                        let txt = document.createElement('p');
                        txt.classList.add('text-danger');
                        txt.classList.add('remover');
                        txt.innerHTML = respuesta[resultado];
                        document.querySelector('#'+resultado).insertAdjacentElement('afterend', txt);

                    }

                }).catch(error =>console.log('error', error));

        });

    </script>

  </body>
  <script> const btn = document.getElementById('button');

  document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Enviando...';

   const serviceID = 'default_service';
   const templateID = 'template_5duj6gh';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Enviar Mensaje';
      alert('Mensaje enviado en breve lo contactaremos');
    }, (err) => {
      btn.value = 'Enviar Mensaje';
      alert(JSON.stringify(err));
    });
   });

  </script>
</html>

<?php


    $nombre = $_POST["nombre"] ?? '';
    $apellido = $_POST["apellido"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';
 
    $respuesta = [];
    $bandera = true;

    if($nombre == ''){
        $respuesta += ['nombre' => 'Ingres un nombre'];
        $bandera= false;
    }

    if($apellido == ''){
        $respuesta += ['apellido' => 'Ingrese un apelllido']; 
        $bandera= false;
    }

    if($correo == '' ){
        $respuesta += ['correo' => 'Ingrese un correo'];

        $bandera= false;
    }

    if($mensaje == '' ){
        $respuesta += ['mensaje' => 'Ingrese un mensaje'];
        $bandera= false;
    }

    if($bandera){

    }
    echo json_encode($respuesta);
?>