<?php
    function mostrarTodos(): array{
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';
    
        $campeones = CampeonDB::getAll();

        return $campeones;
    }


    

?>