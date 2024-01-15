<?php

    /*
    Funcion para eliminar el campeon que se desee segun el nombre del campeon que se introduzca
    Recibe: el nombre del campeon que se quiere eliminar 
    Devuelve: false si no se ha eliminado
    Devuelve: true si se ha eliminado
    */
    function borrarCampeon($nombre): bool {
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';

        $campeones = CampeonDB::getCampeonNombre($nombre);
    
        $campeon = CampeonDB::deleteCampeon($campeones);
    
        return $campeon;
    }
?>