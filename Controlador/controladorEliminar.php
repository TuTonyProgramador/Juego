<?php
    function borrarCampeon($nombre): bool {
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';

        $campeones = CampeonDB::getCampeonNombre($nombre);
    
        $campeon = CampeonDB::deleteCampeon($campeones);
    
        return $campeon;
    }
?>