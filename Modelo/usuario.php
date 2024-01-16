<?php
    class Usuario {
        // Miembros privados de la clase
        private int $id;
        private string $nombre;
        private string $usuario;
        private string $pwd;
        private string $email;

        // Propiedades asociada al miembro privado $id
        public function getId(): int {
            return $this->id;
        }

        // Propiedades asociada al miembro privado $nombre
        public function getNombre(): string {
            return $this->nombre;
        }
        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        // Propiedades asociada al miembro privado $usuario
        public function getUsuario(): string {
            return $this->usuario;
        }
        public function setUsuario(string $usuario): void {
            $this->usuario = $usuario;
        }

        // Propiedades asociada al miembro privado $pwd
        public function getPwd(): string {
            return $this->pwd;
        }
        public function setPwd(string $pwd): void {
            $this->pwd = $pwd;
        }

        // Propiedades asociada al miembro privado $email
        public function getEmail(): string {
            return $this->email;
        }
        public function setEmail(string $email): void {
            $this->email = $email;
        }
    }
?>