<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Registrarse</title>
</head>
<body>
    <nav>
        <a href="formRegistrar.php">Registrar</a>
        <a href="formInicioSesion.php">Iniciar Sesión</a>
    </nav>
    <br>
    <form action="../Controlador/controladorRegistro.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <br>
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <br>
        <label for="contrasenia">Password: </label>
        <input type="password" name="contrasenia" id="contrasenia" required>
        <br>
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>
        <br>
        <br>
        <input type="submit" class="button" id="bRegistrar" name="bRegistrar" value="Registrar">
    </form>
</body>
</html>