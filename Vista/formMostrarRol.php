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
    <form action="../Controlador/controladorMostrarRol.php" method="post">
    <label for="rol">Inserte un rol: </label>
        <input type="text" name="rol" id="rol" required>
        <br>
        <br>
        <input type="submit" id="bmostrar" name="mostrar" value="Mostrar">
    </form>
    
</body>
</html>