<?php
    include_once '../Modelo/campeon.php';
    include_once '../Modelo/campeonBD.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtencion datos formulario
        $nombre = $_POST['nombre'];

        $campeones = CampeonDB::getCampeonNombre($nombre);

    }
?>