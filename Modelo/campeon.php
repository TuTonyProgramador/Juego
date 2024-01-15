<?php
    class Campeon {
        // Miembros privados de la clase
        private int $idCampeon;
        private string $nombre;
        private string $rol;
        private string $dificultad;
        private string $descripcion;
        
        // Propiedad asociada al miembro privado $idCampeon
        public function getIdCampeon(): int {
            return $this->idCampeon;
        }

        // Propiedades asociada al miembro privado $nombre
        public function getNombre(): string {
            return $this->nombre;
        }
        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        // Propiedades asociada al miembro privado $rol
        public function getRol(): string {
            return $this->rol;
        }
        public function setRol(string $rol): void {
            $this->rol = $rol;
        }

        // Propiedades asociada al miembro privado $dificultad
        public function getDificultad(): string {
            return $this->dificultad;
        }
        public function setDificultad(string $dificultad): void {
            $this->dificultad = $dificultad;
        }

        // Propiedades asociada al miembro privado $descripcion
        public function getDescripcion(): string {
            return $this->descripcion;
        }
        public function setDescripcion(string $descripcion): void {
            $this->descripcion = $descripcion;
        }
    }
?>