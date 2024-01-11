<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Campeones</title>
</head>
<body>
    <nav>
        <a href="formMostrarTodos.php">Mostrar Todos</a>
        <a href="formInserta.php">Insertar</a>
        <a href="formModificar.php">Modificar</a>
        <a href="formBorrar.php">Borrar</a>
        <a href="formMostrarRol.php">Mostrar por Rol</a>
    </nav>
    <br>
    <?php
        $nuevoCampeon = new Campeon();
    ?>
    <form action="../Controlador/controladorMostrarRol.php" method="post">

        <label for="nombre">Inserte un nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <br>
        <input type="submit" id="bEnviar" name="enviar" value="Enviar">

        
        
        
        
        
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php $nuevoCampeon->getNombre() ?>">
        <br>
        <br>
        <label for="rol">Rol: </label>
        <input type="text" name="rol" id="rol" value="<?php $nuevoCampeon->getRol() ?>">
        <br>
        <br>
        <label for="dificultad">Dificultad: </label>
        <input type="text" name="dificultad" id="dificultad" value="<?php $nuevoCampeon->getDificultad() ?>">
        <br>
        <br>
        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion" id="descripcion" value="<?php $nuevoCampeon->getDescripcion() ?>">
        <br>
        <br>
        <input type="submit" id="bmodificar" name="moficar" value="Modificar"> 

    </form>
    
</body>
</html>