<?php
    include_once '../Modelo/usuario.php';
    include_once '../Modelo/usuarioBD.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        // Obtencion datos formulario
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $pwd = $_POST['contrasenia'];
        $email = $_POST['email'];

        $newUsuario = new Usuario();
        $newUsuario->setNombre($nombre);
        $newUsuario->setUsuario($usuario);
        $newUsuario->setPwd($pwd);
        $newUsuario->setEmail($email);

        if (UsuarioBD::registrarUsuario($newUsuario)) {
            echo "<script>alert('El usuario " . $nombre . " ha sido introducido en el sistema con la contraseña " . $pwd . "');</script>";
            echo "<script>window.location.href='../Vista/formInicioSesion.php';</script>";
        } else {
            echo "<br> No se ha podido registrar";
        }
    }
?>