<?php
    class Campeon {
        private int $idCampeon;
        private string $nombre;
        private string $rol;
        private string $dificultad;
        private string $descripcion;
        

        public function getIdCampeon(): int {
            return $this->idCampeon;
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function getRol(): string {
            return $this->rol;
        }

        public function setRol(string $rol): void {
            $this->rol = $rol;
        }

        public function getDificultad(): string {
            return $this->dificultad;
        }

        public function setDificultad(string $dificultad): void {
            $this->dificultad = $dificultad;
        }

        public function getDescripcion(): string {
            return $this->descripcion;
        }

        public function setDescripcion(string $descripcion): void {
            $this->descripcion = $descripcion;
        }
    }
?>