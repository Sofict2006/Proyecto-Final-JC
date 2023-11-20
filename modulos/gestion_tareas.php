<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Tareas</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" type="image/jpg" href="../img/favicon.png" />

</head>
<body>

<div class="card">
<form action="logica_tareas.php" method="post" autocomplete="off">

<div class="heading">
    <center>
        <h2>Crea una tarea</h2>
    </center>
</div>

<div class="actual-form">

    <div class="input-wrap">
        <label>Nombre de la tarea</label>
        <input type="text" id="nombre_tarea" name="nombre_tarea" minlength="4" class="input-field" autocomplete="off" required/>
    </div>

    <div class="input-wrap">
        <label>Descripción de la tarea</label>
        <input type="text" id="descripcion" name="descripcion" minlength="4" class="input-field" autocomplete="off" required/>
    </div>

    <div class="input-wrap">
        <label>Fecha de finalización</label>
        <input type="date" id="fecha_fin" name="fecha_fin" minlength="4" class="input-field" autocomplete="off" required/>
    </div>

    <div class="input-wrap">
        <label>Estado</label>
        <select type="text" id="estado" name="estado" class="input-field" required>
            <option selected>Seleccionar...</option>
            <option value="1">Completada</option>
            <option value="0">Pendiente</option>
        </select>
    </div>

    <br>

    <button type="submit" value="Registrarme" class="sign-btn" name="btn_crear_t"> Crear tarea </button>

</div>
</form>
</div>

</body>
</html>