<?php
    class ObtenerConexion {

        private static $conexion;

        public static function obtenerConexion() {
            include_once "datosConexion.php";

            try {
                self::$conexion = new PDO(DSN, USER, PWD);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                //echo "Conexion establecida ...<br>";
        
            } catch (PDOException $e) {
                echo "Fallo en la conexion: " . $e->getMessage();
            }

            return self::$conexion;
        }
    }
?>