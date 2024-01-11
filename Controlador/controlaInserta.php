<?php
    include_once '../Modelo/campeon.php';
    include_once '../Modelo/campeonBD.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtencion datos formulario
        $nombre = $_POST['nombre'];
        $rol = $_POST['rol'];
        $dificultad = $_POST['dificultad'];
        $descripcion = $_POST['descripcion'];

        $nuevoCampeon = new Campeon();
        $nuevoCampeon->setNombre($nombre);
        $nuevoCampeon->setRol($rol);
        $nuevoCampeon->setDificultad($dificultad);
        $nuevoCampeon->setDescripcion($descripcion);

        if (CampeonDB::addCampeon($nuevoCampeon)) {
            echo "<br> Registro insertado correctamente";
        } else {
            echo "<br> No se ha podido insertar";
        }
    }
?>