<?php
    include_once '../Modelo/campeon.php';
    include_once '../Modelo/campeonBD.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtencion datos formulario
        $rol = $_POST['rol'];

        $campeones = CampeonDB::getCampeon($rol);

        foreach ($campeones as $campeon) {
            echo "<br>Id: ".$campeon['idCampeon'];
            echo "<br>Nombre: ".$campeon['nombre'];
            echo "<br>Rol: ".$campeon['rol'];
            echo "<br>Dificultad: ".$campeon['dificultad'];
            echo "<br>Descripcion: ".$campeon['descripcion'];
        }
    }
?>