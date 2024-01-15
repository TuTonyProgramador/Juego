<?php
    /*
    Funcion para mostrar todos los campeones 
    Recibe: nada
    Devuelve: un array con todos los campeones para mostrarlos
    */
    function mostrarTodos(): array{
        include_once '../Modelo/campeon.php';
        include_once '../Modelo/campeonBD.php';
    
        $campeones = CampeonDB::getAll();

        return $campeones;
    }
?>