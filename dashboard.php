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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="icon" type="image/jpg" href="img/favicon.png" />


    <meta charset="UTF-8">

    <title>Inicio</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img class="logo" src="logo-png" alt="">
            </a>
            <ul class="enlaces_menu">
                <li><a href="dashboard.php?mod=inicio">Inicio</a></li>
                <li><a href="dashboard.php?mod=gestion_tareas">Tareas</a></li>
                <li><a href="dashboard.php?mod=inicio">Crear tareas</a></li>
                <li><a href="dashboard.php?mod=inicio">Contacto</a></li>
            </ul>

            <button class="hola" type="button">
                <span class="br_1"></span>
                <span class="br_2"></span>
                <span class="br_3"></span>
            </button>
        </nav>
    </header>    

    <?php
        if(@ $_GET['mod']==""){
            require_once("modulos/inicio.php");
        }
        else
        if(@ $_GET['mod']=="gestion_tareas"){         
            require_once("modulos/gestion_tareas.php");
        }
        else
        if(@ $_GET['mod']=="inicio"){    
            require_once("modulos/inicio.php");
        }
        else
        if (@ $_GET['mod']=="gestion_usuarios"){
            require_once("modulos/gestion_usuarios.php");
        }
        else
        if (@ $_GET['mod']=="crear_usuarios"){
            require_once("modulos/crear_usuarios.php");
        }

    ?>

    <footer class="footer">
        
    </footer>

    <script src="./js/dashboard.js"></script>
</body>
</html>