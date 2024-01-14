<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Campeones</title>
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

    <?php
        $campeones = array();

        include_once '../Modelo/campeon.php';
        include_once '../Controlador/controladorMostrarTodos.php';

        // Mover la lógica para mostrar campeones fuera del condicional
        $campeones = mostrarTodos();

        if (!empty($campeones)) { 
            echo "<table border='1'>";
            echo "<tr><th>Id</th><th>Nombre</th><th>Rol</th><th>Dificultad</th><th>Descripcion</th></tr>";
        
            foreach ($campeones as $campeon) {
                echo "<tr>";
                echo "<td>".$campeon->getIdCampeon()."</td>";
                echo "<td>".$campeon->getNombre()."</td>";
                echo "<td>".$campeon->getRol()."</td>";
                echo "<td>".$campeon->getDificultad()."</td>";
                echo "<td>".$campeon->getDescripcion()."</td>";
                echo "</tr>";
            }
        
            echo "</table>";
        }
    ?>

    <br>
    <br>
    
</body>
</html>
