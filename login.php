<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="login()">
        <h1 class="title">Login <br> Only Admin</h1>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="username" type="text" id="username" required>
        </label>
        <label for="">
            <i class="fa-solid fa-lock"></i>
            <input placeholder="contraseña" type="password" id="contraseña"  required>
        </label>
        <a href="#" class="link">Forgot your password?</a>

        <!-- <button id="boton" class="boton" onclick="login(e)">Iniciar Seccion</button> -->
        <button id="boton" class="boton" type='submit'>Iniciar Seccion</button>
        
    </form>

    <script src="Script.js"></script>
    <script src="main.js"></script>
</body>
</html>