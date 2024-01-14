<?php

    function obtenerCampeon($nombre): Campeon {
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';

        $campeon = CampeonDB::getCampeonNombre($nombre);

        return $campeon;
    }

    function modificarCampeon($nombreM, $rolM, $dificultadM, $descripcionM): bool {
        include_once '../Modelo/campeonBD.php';

        $nuevoCampeon = new Campeon();
        $nuevoCampeon->setNombre($nombreM);
        $nuevoCampeon->setRol($rolM);
        $nuevoCampeon->setDificultad($dificultadM);
        $nuevoCampeon->setDescripcion($descripcionM);

        $campeon = CampeonDB::updateCampeon($nuevoCampeon);
    
        return $campeon;
    }
?>