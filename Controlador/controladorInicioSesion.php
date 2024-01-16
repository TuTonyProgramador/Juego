<?php
    include_once '../Modelo/usuario.php';
    include_once '../Modelo/usuarioBD.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $usuario = $_POST['usuario'];
        $pwd = $_POST['contrasenia'];

        if (UsuarioBD::iniciaUsuario($usuario, $pwd)) {
            echo "<script>alert('USUARIO CORRECTAMENTE LOGUEADO.');</script>";
            echo "<script>window.location.href='../Vista/formMostrarTodos.php';</script>";
        } else {
            echo "<br> El usuario no existe en la BBDD.";
        }
    }
?>