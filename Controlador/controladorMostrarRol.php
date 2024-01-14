<?php
    function mostrarPorRol($rol): array {
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';
    
        $campeones = CampeonDB::getCampeon($rol);
    
        return $campeones;
    }
?>