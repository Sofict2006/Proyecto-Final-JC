<?php
//Abrimos la sesion
session_start();
if(isset($_SESSION['nu_id'])){
 echo "<script> window.location='dashboard.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Sign in & Sign in</title>

    <link rel="icon" type="image/jpg" href="img/favicon.png" />

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">

                    <form action="index.php" method="post" autocomplete="off" class="sign-in-form">

                    <?php

                        include "conexion.php";

                        if(isset($_POST['btn_ingresar'])) {

                            $correo = $_POST['correo'];
                            $password = $_POST['password'];

                            $encrip = md5($password);

                            $consultar = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$encrip'");

                            $resultado = mysqli_num_rows($consultar);
                        
                            if ($resultado == 1) {
                           
                           while($fila = mysqli_fetch_array($consultar)){
                            $_SESSION['correo'] = $fila['correo'];
                            $_SESSION['nombres'] = $fila['nombres'];
                            $_SESSION['apellidos'] = $fila['apellidos'];
                            $_SESSION['rol'] = $fila['FK_rol'];

                            
                            echo "<script> window.location='dashboard.php'; </script>";
                            
                           }
                          
                        } else{ 
                                                    
                          echo "Usuario y/o Clave no coinciden";
                        }
                        }
                    ?>

                        <div class="logo">
                            <img src="./img/logo.png" alt="eassyclass">
                            <h4>easyclass</h4>
                        </div>
                    <div class="heading">
                        <h2>Bienvenido de nuevo</h2>
                        <h6>¿No estás registrado?</h6>
                        <a href="#" class="toggle">registrate</a>
                    </div>


                    <div class="actual-form">
                        <div class="input-wrap">
                            <input type="text" id="correo" name="correo" minlength="4" class="input-field" autocomplete="off" required/>
                            <label>Correo electrónico</label>
                        </div>

                        <div class="input-wrap">
                            <input type="password" id="password" name="password" minlength="4" class="input-field" autocomplete="off" required/>
                            <label>Contraseña</label>
                        </div>

                        <button type="submit" class="sign-btn" name="btn_ingresar"> Ingresar </button>

                        <p class="text">
                            ¿Olvidaste tu contraseña?
                            <a href="#">Obtén ayuda</a> para iniciar sesión
                        </p>
                    </div>
                    </form>

                    <form action="logica_registro.php" method="post" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="./img/logo.png" alt="eassyclass">
                            <h4>easyclass</h4>
                        </div>

                    <div class="heading">
                        <h2>Regístrate</h2>
                        <h6>¿Ya tienes una cuenta?</h6>
                        <a href="#" class="toggle">Ingresar</a>
                    </div>


                    <div class="actual-form">

                        <div class="input-wrap">
                            <input type="email" id="correo" name="correo" minlength="4" class="input-field" autocomplete="off" required/>
                            <label>Correo</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" id="nombres" name="nombres" minlength="4" class="input-field" autocomplete="off" required/>
                            <label>Nombres</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" id="apellidos" name="apellidos" minlength="4" class="input-field" autocomplete="off" required/>
                            <label>Apellidos</label>
                        </div>

                        <div class="input-wrap">
                            <input type="password" id="password" name="password" minlength="4" class="input-field" autocomplete="off" required/>
                            <label>Contraseña</label>
                        </div>

                        <button type="submit" value="Registrarme" class="sign-btn" name="btn_registrar"> Registrarme </button>

                        <p class="text">
                            Al registrarme estoy de acuerdo con los <a href="#">Terminos y condiciones</a> y <a href="#">política de privacidad</a>
                        </p>
                    </div>
                    </form>

                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/img1.png" class="image img-1 show" alt=""/>
                        <img src="./img/image2.png" class="image img-2" alt=""/>
                        <img src="./img/image3.png" class="image img-3" alt=""/>
                    </div>
                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    


    <script src="./js/app.js"></script>
</body>
</html>