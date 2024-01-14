<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Campeon</title>
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
        <input type="submit" class="button" id="bEnviar" name="bEnviar" value="Enviar">
    </form>

    <?php
        if(isset($_POST['bEnviar'])) {
            include_once '../Modelo/campeon.php';
            include_once '../Controlador/controladorModificar.php';

            $nombre = $_POST['nombre'];

            $campeon = new Campeon();
            $campeon = obtenerCampeon($nombre);
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombreM" id="nombreM" value="<?php echo $campeon->getNombre(); ?>" required readonly>
        <br>
        <br>
        <label for="rol">Rol: </label>
        <input type="text" name="rolM" id="rolM" value="<?php echo $campeon->getRol(); ?>" required>
        <br>
        <br>
        <label for="dificultad">Dificultad: </label>
        <input type="text" name="dificultadM" id="dificultadM" value="<?php echo $campeon->getDificultad(); ?>" required>
        <br>
        <br>
        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcionM" id="descripcionM" value="<?php echo $campeon->getDescripcion(); ?>" required>
        <br>
        <br>
        <input type="submit" class="button" id="bModificar" name="bModificar" value="Modificar">
    </form>

    <?php
        } elseif(isset($_POST['bModificar'])) {
            include_once '../Modelo/campeon.php';
            include_once '../Controlador/controladorModificar.php';

            $nombreM = $_POST['nombreM'];
            $rolM = $_POST['rolM'];
            $dificultadM = $_POST['dificultadM'];
            $descripcionM = $_POST['descripcionM'];

            $campeonModificado = modificarCampeon($nombreM, $rolM, $dificultadM, $descripcionM);

            if ($campeonModificado) {
                echo "<br> Campeón actualizado correctamente";
            } else {
                echo "<br> No se ha podido actualizado";
            }
        }
    ?>
    
</body>
</html>