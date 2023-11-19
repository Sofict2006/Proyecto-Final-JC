<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Tareas</title>

</head>
<body>
<form action="logica_registro.php" method="post" autocomplete="off">

<div class="heading">
    <h2 >Regístrate</h2>
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

    
    <script src="./js/app.js"></script>
</body>
</html>