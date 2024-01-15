<?php

    /*
    Funcion para obtener un campeon por su nombre
    Recibe: el nombre del campeon que se desea buscar
    Devuelve: un objeto campeon, que es el campeon que se ha encontrado
    */
    function obtenerCampeon($nombre): Campeon {
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';

        $campeon = CampeonDB::getCampeonNombre($nombre);

        return $campeon;
    }

    /*
    Funcion para modificar un campeon por su nombre
    Recibe: los datos que se quieren modificar
    Devuelve: false si no se ha modificado
    Devuelve: true si se ha modificado
    */
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