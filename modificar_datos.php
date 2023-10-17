<?php
require_once 'clases/Usuario.php';
require_once 'clases/ControlSesion.php';

session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
} else {
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Ecos Del Pasado</title>
        <link rel="stylesheet" href="estilosmodificar.css">
    </head>
    <section class="container">
      <div class="titulo">
      <h1>Biblioteca Ecos Del Pasado</h1>
      </div>
      <div class="texto">
            <h3>Modificar datos de usuario</h3>
            <form action="modificar_datos.php" method="post">
                <label for="usuario_empleado">Usuario</label>
                <input name="usuario_empleado" class="input"
                    value="<?php echo $usuario->usuario_empleado;?>"><br>
                <label for="nombre_persona">Nombre</label>
                <input name="nombre_persona" class="input"
                    value="<?php echo $usuario->nombre_persona;?>"><br>
                <label for="apellido_persona">Apellido</label>
                <input name="apellido_persona" class="input"
                    value="<?php echo $usuario->apellido_persona;?>"><br>
            
                <button type="submit" value="Modificar datos" class="button">
            </form>
      </div>
    </section>
</html>