<?php     
    if(isset($_POST['btn_registrar'])){

   include ("conexion.php");

   $correo = $_POST['correo'];
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $password = $_POST['password'];

    $encrip = md5($password);
  
   $registrar = mysqli_query($conexion,"INSERT INTO `usuario` (`correo`, `nombres`, `apellidos`, `contraseña`, `FK_rol`) VALUES ('$correo', '$nombres', '$apellidos', '$encrip', '2');
   ");

   echo "<script> alert('Registro exitoso'); </script>";

   echo "<script> window.location='index.php'; </script>";

}

?>