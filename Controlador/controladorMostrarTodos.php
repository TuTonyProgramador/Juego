<?php
    include_once '../Modelo/campeon.php';
    include_once '../Modelo/campeonBD.php';

    $campeones = CampeonDB::getAll();

    echo '<table border="1"> <tr> <th>Nombre</th> <th>Rol</th> <th>Dificultad</th> <th>Descripción</th> </tr>';

    foreach ($campeones as $campeon){
        echo '<tr>
        <td>' . $campeon->getNombre() . '</td>
        <td>' . $campeon->getRol() . '</td>
        <td>' . $campeon->getDificultad() . '</td>
        <td>' . $campeon->getDescripcion() . '</td>
    </tr>';
    }

    echo '</table>';

?>