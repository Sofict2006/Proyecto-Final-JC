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
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    
    <h1> Bienvenid@ <?php echo $_SESSION['nombres']; ?> </h1>
    <a href="salir.php"> Cerrar sesión </a>

</body>
</html>