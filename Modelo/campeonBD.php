<?php
    include_once 'campeon.php';

    class CampeonDB {

        /*
        Funcion mostrar todos los campeones de la base de datos
        Recibe: nada
        Devuelve: un array con todos los campeones de la base de datos
        */
        public static function getAll(): array {
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

        /*
        Funcion para buscar un campeon de la base de datos por su rol
        Recibe: el rol del campeon que se desea buscar
        Devuelve: un array con todos los campeones que tengan ese rol
        */
        public static function getCampeon($rol): array {
            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();
        
            // Preparar la consulta SQL
            $sql = "SELECT * FROM campeon WHERE rol = :rol";
            $sentencia = $conexion->prepare($sql);
        
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
            $sentencia->bindParam(":rol", $rol);
            $sentencia->execute();
        
            return $sentencia->fetchAll();
        }
        
        /*
        Funcion para insertar un nuevo campeon en la base de datos
        Recibe: el objeto que se quiere insertar de la clase Campeon
        Devuelve: false si no se ha insertado
        Devuelve: true si se ha insertado
        */
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

        /*
        Funcion para buscar un campeon de la base de datos por su nombre
        Recibe: el nombre del campeon que se desea buscar
        Devuelve: un objeto campeon, que es el campeon que se ha encontrado
        */
        public static function getCampeonNombre(string $nombre) : Campeon {
            $campeon = new Campeon();

            // Establecer conexión con la base de datos
            include_once('../Conexion/obtenerConexion.php');
            $conexion = ObtenerConexion::obtenerConexion();

            // Preparar la consulta
            $sql = "SELECT * FROM campeon WHERE nombre = :nombre";
            $sentencia = $conexion->prepare($sql);

            // Ejecutar la consulta
            $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
            $sentencia->bindParam(':nombre', $nombre);
            $sentencia->execute();

            $campeon = $sentencia->fetch();

            return $campeon;
        }
        
        /*
        Funcion para modificar el campeon que se desee segun el nombre del campeon que se introduzca
        Recibe: el objeto que se quiere modificar de la clase Campeon
        Devuelve: false si no se ha modificado
        Devuelve: true si se ha modificado
        */
        public static function updateCampeon(Campeon $campeon) : bool {
            $result = false;

            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();
    
            // Preparar la consulta SQL
            $sql = "UPDATE campeon SET nombre = :nombre, rol = :rol, dificultad = :dificultad, descripcion = :descripcion WHERE nombre = :nombre";
    
            $sentencia = $conexion->prepare($sql);

            $sentencia->bindValue(":nombre", $campeon->getNombre());
            $sentencia->bindValue(":rol", $campeon->getRol());
            $sentencia->bindValue(":dificultad", $campeon->getDificultad());
            $sentencia->bindValue(":descripcion", $campeon->getDescripcion());

            $result = $sentencia->execute();

            return $result;
        }
    
        /*
        Funcion para eliminar el campeon que se desee segun el nombre del campeon que se introduzca
        Recibe: el objeto que se quiere eliminar de la clase Campeon
        Devuelve: false si no se ha eliminado
        Devuelve: true si se ha eliminado
        */
        public static function deleteCampeon(Campeon $campeon): bool {
            $result = false;

            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();
    
            // Preparar la consulta SQL
            $sql = "DELETE FROM campeon WHERE nombre = :nombre";

            $nombre = $campeon->getNombre();
    
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(":nombre", $nombre); 

            $result = $sentencia->execute();

            return $result;
        }
    }
?>