<?php
//Abrimos la sesion
session_start();
if(!isset($_SESSION['correo'])){
 echo "<script> window.location='index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./css/dashboard.css">

    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img class="logo" src="logo-png" alt="">
            </a>
            <ul class="enlaces_menu">
                <li><a href="">Inicio</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href="">Equipo</a></li>
                <li><a href="">Contacto</a></li>
            </ul>

            <button class="hola" type="button">
                <span class="br_1"></span>
                <span class="br_2"></span>
                <span class="br_3"></span>
            </button>
        </nav>
    </header>    

    <h1> Bienvenid@ <?php echo $_SESSION['nombres']; ?> </h1>
    <a href="salir.php"> Cerrar sesión </a>

    <script src="./js/dashboard.js"></script>
</body>
</html>