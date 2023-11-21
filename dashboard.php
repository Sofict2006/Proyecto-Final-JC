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
    <link rel="stylesheet" href="css/dashboard1.css">

    <link rel="icon" type="image/png" href="img/favicon.png" />

    <script src="https://kit.fontawesome.com/cd328211ff.js" crossorigin="anonymous"></script>


    <meta charset="UTF-8">

    <title>Inicio</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img class="logo" src="img/favicon.png" alt="">
            </a>
            <ul class="enlaces_menu">
<<<<<<< HEAD
                <li><a href="dashboard.php?mod=crud_tarea">Inicio</a></li>
                <li><a href="dashboard.php?mod=crud_tarea">Gestionar Tareas</a></li>
                <li><a href="dashboard.php?mod=gestion_tareas">Crear Tareas</a></li>
                <li><a href="dashboard.php?mod=inicio">Perfil</a></li>
=======
                <li><a href="dashboard.php?mod=inicio">Inicio</a></li>
                <li><a href="dashboard.php?mod=gestion_tareas">Tareas</a></li>
                <li><a href="dashboard.php?mod=crud_tarea">Crear tareas</a></li>
                <li><a href="dashboard.php?mod=inicio">Contacto</a></li>
>>>>>>> feb1da2a4955cc5198b95b1813ca1706d82d06a0
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
            require_once("modulos/crud_tarea.php");
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
        if (@ $_GET['mod']=="crud_tarea"){
            require_once("modulos/crud_tarea.php");
        }

    ?>

    <footer class="footer">
        
    </footer>

    <script src="./js/dashboard.js"></script>
</body>
</html>