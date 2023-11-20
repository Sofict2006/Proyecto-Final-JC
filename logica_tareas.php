<?php     
    session_start();

    if(isset($_POST['btn_crear_t'])){

   include ("conexion.php");


   $nombre_tarea = $_POST['nombre_tarea'];
   $descripcion = $_POST['descripcion'];
   $fecha_fin = $_POST['fecha_fin'];
   $estado = $_POST['estado'];

   $correo_usuario = isset($_SESSION['correo']) ? $_SESSION['correo'] : '';

   $registrar = mysqli_query($conexion,"INSERT INTO `tareas` (`nom_tarea`, `descipcion`, `fecha_fin`, `estado`, `FK_usuario`) VALUES ( '$nombre_tarea', '$descripcion', '$fecha_fin', '$estado', '$correo_usuario'); ");

   echo "<script> alert('Nueva tarea creada'); </script>";

   echo "<script> window.location='dashboard.php?mod=gestion_tareas'; </script>";

}

?>