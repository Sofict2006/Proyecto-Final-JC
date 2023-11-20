<?php
// Incluir la conexion
include './conexion.php';

// Verificar el boton buscar
if(isset($_SESSION['correo'])){

if (isset($_POST['btn_eliminar'])){

$doc = $_POST['doc_eliminar'];

$eliminar = mysqli_query($conexion,"DELETE FROM tareas WHERE `tareas`.`id_tarea` = $doc");

echo "<script> alert('Usuario eliminado correctamente.'); </script>";

}

if (isset($_POST['btn_modificar'])){

 echo "<script>window.location='dashboard.php?mod=crud_tarea#formulario';</script>";

}
if (isset($_POST['btn_actualizar_usuario'])){
  
// Traemos la conexion
include "conexion.php";

// Traemos todos los datos del formulario
$id_tarea = $_POST['id_tarea'];
$nombre_tarea = $_POST['nombre_tarea'];
$descripcion = $_POST['descripcion'];
$fecha_fin = $_POST['fecha_fin'];
$estado = $_POST['estado'];

$correo_usuario = isset($_SESSION['correo']) ? $_SESSION['correo'] : '';


//Realizamos el envio a la tabla usuarios de la bd
$modificar = mysqli_query($conexion,"UPDATE `tareas` SET `nom_tarea` = '$nombre_tarea', `descipcion` = '$descripcion', `fecha_fin` = '$fecha_fin', `estado` = '$estado', `FK_usuario` = '$correo_usuario' WHERE `tareas`.`id_tarea` = '$id_tarea';") or die ($conexion."Error en el registro");


// Mostramos mensaje tipo alerta de registro exitoso
echo "<script>alert('Modificación Exitosa');</script>";


}

?>

<br>

<form action="dashboard.php?mod=crud_tarea" method="post">

    <input type="text" class="form-control" placeholder="Buscar..." name="txtbuscar" style="width: 50%;">

    <button type="submit" class="btn" name="btn_registrar1" style="border-radius: 10px; width: 150px; margin-top: 8px;">Buscar</button>

</form>

<br>
 
    <h4 class="card-title" style="text-align: center;">Gestión de Tareas</h4>
        <center> 
            <p class="card-description"> ¡Hola, <?php echo $_SESSION['nombres'];?>! Aquí puedes gestionar los usuarios.</p> 
        </center>
        <table class="table">
            <thead>
                <tr>
                    <th>Correo</th>
                    <th>Id Tarea</th>
                    <th>Nombre tarea</th>
                    <th>Descripción</th>
                    <th>Fecha fin</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
              
<?php

 //recibir el dato
 $dato = @$_POST['txtbuscar'];

 // Consulta
 $consulta = mysqli_query($conexion,"SELECT * FROM tareas WHERE id_tarea LIKE '%$dato%';") or die ($conexion."Error en la consulta");

//Cantidad de datos encontrados
 $cantidad = mysqli_num_rows($consulta);
 if($cantidad > 0){

  // Ciclo para recorrer los datos
 while($fila=mysqli_fetch_array($consulta)){
?>

                <tr>
                    <td><?php echo $fila['FK_usuario']; ?></td>
                    <td><?php echo $fila['id_tarea'];  ?></td>
                    <td><?php echo $fila['nom_tarea']; ?></td>
                    <td><?php echo $fila['descipcion']; ?></td>
                    <td><?php echo $fila['fecha_fin']; ?></td>
                    <td><?php echo $fila['estado']; ?></td>
                    <td>

                        <form action="dashboard.php?mod=crud_tarea" method="post">
                            <input type="text" name="doc_modificar" value="<?php echo $fila['id_tarea']; ?>" hidden>
                            <button type="submit" name="btn_modificar" style="background-color: rgba(0, 0, 0, 0.0); border: 0px;">
                                <i class="fa-solid fa-pen-to-square" style="color:#5783bc;"></i>
                            </button>
                        </form>

                    </td>
                    <td>
                        <form action="dashboard.php?mod=crud_tarea" method="post">
                            <input type="text" name="doc_eliminar" value="<?php echo $fila['id_tarea']; ?>" hidden>
                            <input type="text" name="fecha" value="<?php echo date('Y-m-d'); ?>" hidden>

                            <button type="submit" name="btn_eliminar" style="background-color: rgba(0, 0, 0, 0.0); border: 0px;">
                                <i class="fa-solid fa-trash" style="color: #5783bc; margin-left: 1rem;"></i>
                            </button>
                        </form>

                    </td>
                </tr>

<?php
    }
  }
}
  ?>
 
            </tbody>
        </table>

<?php
if (isset($_POST['btn_modificar'])){

$doc = @$_POST['doc_modificar'];

// Consulta
    $consulta = mysqli_query($conexion,"SELECT * FROM tareas WHERE id_tarea = $doc");

// Recolectamos todos los datos
while($fila2=mysqli_fetch_array($consulta)){

?>

<div class="titulo">
    <h4 class="card-title" style="text-align: center;">Modificar</h4>
</div>

<form action="dashboard.php?mod=crud_tarea" method="post" name="registration">

    <input type="hidden" name="id_tarea" value="<?php echo $fila2['id_tarea']; ?>">

    <div class="input-wrap">
        <label>Nombre de la tarea</label>
        <input type="text" id="nombre_tarea" name="nombre_tarea" minlength="4" class="input-field" value="<?php echo $fila2['nom_tarea']; ?>"/>
    </div>

    <div class="input-wrap">
        <label>Descripción de la tarea</label>
        <input type="text" id="descripcion" name="descripcion" minlength="4" class="input-field" value="<?php echo $fila2['descipcion']; ?>"/>
    </div>

    <div class="input-wrap">
        <label>Fecha de finalización</label>
        <input type="date" id="fecha_fin" name="fecha_fin" minlength="4" class="input-field" value="<?php echo $fila2['fecha_fin']; ?>"/>
    </div>

    <div class="input-wrap">
        <label>Estado</label>
        <select type="text" id="estado" name="estado" class="input-field">
            <option value="1" <?php if ($fila2['estado'] == '1') echo 'selected'; ?>> Completada </option>
            <option value="0" <?php if ($fila2['estado'] == '0') echo 'selected'; ?>> Pendiente </option>
        </select>
    </div>

    <div class="col-md-12 text-center mb-3">
        <button type="submit" class="btn btn-block mybtn btn-success tx-tfm" name="btn_actualizar_usuario">Modificar</button>
    </div>
</form>
                         
<?php
}
}
?>