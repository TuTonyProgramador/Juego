<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Campeon</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <nav>
        <a href="formMostrarTodos.php">Mostrar Todos</a>
        <a href="formInserta.php">Insertar</a>
        <a href="formModificar.php">Modificar</a>
        <a href="formEliminar.php">Borrar</a>
        <a href="formMostrarRol.php">Mostrar por Rol</a>
    </nav>

    <br>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Inserte un nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <br>
        <input type="submit" class="button" id="bEliminar" name="bEliminar" value="Eliminar">
    </form>

    <?php
        if(isset($_POST['bEliminar'])) {
            include_once '../Controlador/controladorEliminar.php';
            $nombreCampeon = $_POST['nombre'];
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="nombre" value="<?php echo $nombreCampeon; ?>">
        <h2>Confirmar borrado de campeón</h2>
        <p>¿Estás seguro de que deseas borrar al campeon con Nombre <?php echo $nombreCampeon; ?>?</p>
        <input type="submit" class="button" name="confirmarBorrado" id="confirmarBorrado" value="Confirmar Borrado">
    </form>

    <?php 
     } elseif (isset($_POST['confirmarBorrado'])) {
        include_once '../Controlador/controladorEliminar.php';
        $nombreCampeon = $_POST['nombre'];

        $campeon = borrarCampeon($nombreCampeon);

        if ($campeon) {
            echo "<br> Campeón eliminado correctamente";
        } else {
            echo "<br> No se ha podido eliminar";
        }
     } 
    ?>
</body>

</html>
