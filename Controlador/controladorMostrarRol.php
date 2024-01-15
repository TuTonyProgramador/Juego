<?php

    /*
    Funcion para mostrar un campeon de la base de datos por su rol
    Recibe: el rol del campeon que se desea mostrar
    Devuelve: un array con todos los campeones que tengan ese rol
    */
    function mostrarPorRol($rol): array {
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';
    
        $campeones = CampeonDB::getCampeon($rol);
    
        return $campeones;
    }
?>