<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Campeon</title>
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

    <form action="../Controlador/controlaInserta.php" method="post">
        <label for="nombre">Inserte un nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <br>
        <label for="rol">Inserte un rol: </label>
        <input type="text" name="rol" id="rol" required>
        <br>
        <br>
        <label for="dificultad">Inserte una dificultad: </label>
        <input type="text" name="dificultad" id="dificultad" required>
        <br>
        <br>
        <label for="descripcion">Inserte una descripcion: </label>
        <input type="text" name="descripcion" id="descripcion" required>
        <br>
        <br>
        <input type="submit" id="bInsertar" name="insertar" value="Insertar">
    </form>
    
</body>
</html>