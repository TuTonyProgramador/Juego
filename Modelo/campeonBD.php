<?php
    include_once 'campeon.php';

    class CampeonDB {
        public static function getAll() {
            // Establecer conexion con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();

            // Preparar la consulta sql
            $sql = "SELECT * FROM campeon"; 
            $sentencia = $conexion->prepare($sql);

            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
            $sentencia->execute();

            return $sentencia->fetchAll();
        }

        public static function getCampeon($rol): array {
            // Establecer conexion con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();

            // Preparar la consulta sql
            $sql = "SELECT * FROM campeon WHERE rol = :rol"; 
            $sentencia = $conexion->prepare($sql);

            $sentencia->bindParam(":rol", $rol);
            $sentencia->execute();

            $campeones = array();

            while ($fila = $sentencia->fetch()) { 
                $campeones[] = $fila; 
            }

            return $campeones;
        }

        public static function addCampeon(Campeon $campeon): bool {
            $result = false;

            // Establecer conexion con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();

            // Preparar la consulta sql 
            $sql = "INSERT INTO campeon (nombre, rol, dificultad, descripcion) VALUES (:nombre, :rol, :dificultad, :descripcion)";

            $sentencia = $conexion->prepare($sql);

            $sentencia->bindValue(":nombre", $campeon->getNombre()); 
            $sentencia->bindValue(":rol", $campeon->getRol()); 
            $sentencia->bindValue(":dificultad", $campeon->getDificultad());
            $sentencia->bindValue(":descripcion", $campeon->getDescripcion()); 

            $result = $sentencia->execute();

            return $result;
        }

        public static function getCampeonNombre($nombre): Campeon {
            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();
        
            // Preparar la consulta SQL
            $sql = "SELECT * FROM campeon WHERE nombre = :nombre"; 
            $sentencia = $conexion->prepare($sql);
        
            $sentencia->bindParam(":nombre", $nombre);
            $sentencia->execute();
        
            // Obtener el resultado como un objeto Campeon
            $campeon = $sentencia->fetchObject('Campeon');
        
            return $campeon;
        }
        
        public static function updateCampeon(Campeon $campeon): bool {
            $result = false;

            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();
    
            // Preparar la consulta SQL
            $sql = "UPDATE campeon SET nombre = :nombre, rol = :rol, dificultad = :dificultad, descripcion = :descripcion WHERE idCampeon = :id";
    
            $sentencia = $conexion->prepare($sql);
    
            $sentencia->bindValue(":nombre", $campeon->getNombre());
            $sentencia->bindValue(":rol", $campeon->getRol());
            $sentencia->bindValue(":dificultad", $campeon->getDificultad());
            $sentencia->bindValue(":descripcion", $campeon->getDescripcion());

            $result = $sentencia->execute();

    
            return $result;
        }
    
        public static function deleteCampeon(Campeon $campeon): bool {
            $result = false;

            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();
    
            // Preparar la consulta SQL
            $sql = "DELETE FROM campeon WHERE idCampeon = :id";
    
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(":id", $campeon->getId()); 

            $result = $sentencia->execute();
    
            return $result;
        }
    }
?>