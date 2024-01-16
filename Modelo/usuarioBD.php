<?php
    include_once 'usuario.php';

    class UsuarioBD {
        /*
        Funcion para registrar un usuario
        Recibe: el objeto que se quiere registrar de la clase Usuario
        Devuelve: false si no se ha registrado
        Devuelve: true si se ha registrado
        */
        public static function registrarUsuario(Usuario $usuario): bool {
            $result = false;

            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();

            $sql = "INSERT INTO usuario (nombre, usuario, pwd, email) VALUES (:nombre, :usuario, :pwd, :email)";
            $sentencia = $conexion->prepare($sql);

            $result = $sentencia->execute([
                'nombre' => $usuario->getNombre(),
                'usuario' => $usuario->getUsuario(), 
                'pwd' => password_hash($usuario->getPwd(), PASSWORD_DEFAULT),
                'email' => $usuario->getEmail()
            ]);

            return $result;
        }

        /*
        Funcion para iniciar sesion con un usuario de la base de datos
        Recibe: una string. El nombre de usuario 
        Recibe: una string. La contraseña del usuario
        Devuelve: false si no se ha iniciado sesion
        Devuelve: true si se ha iniciado sesion
        */
        public static function iniciaUsuario(string $usuario, string $pwd): bool {
            $usuarioCorrecto = false;

            // Establecer conexión con la BBDD
            include_once '../Conexion/obtenerConexion.php';
            $conexion = ObtenerConexion::obtenerConexion();

            $sql = "SELECT * FROM usuario WHERE usuario = :usuario";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute(['usuario' => $usuario]);

            $usuario = $sentencia->fetch();

            if ($usuario && password_verify($pwd, $usuario['pwd'])) {
                $usuarioCorrecto = true;
                return $usuarioCorrecto;
            } else {
                return $usuarioCorrecto;
            }
        }
    }
?>