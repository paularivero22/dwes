<?php
namespace App;

class Urgencia extends Medico {
    private string $unidad;

    public function __construct(int $codigo, string $nombre, int $edad, Turno $turno, string $unidad) {
        parent::__construct($codigo, $nombre, $edad, $turno);
        $this->unidad = $unidad;
    }

    public function getUnidad(): string {
        return $this->unidad;
    }

    public function setUnidad(string $unidad): void {
        $this->unidad = $unidad;
    }

    public function __toString(): string {
        return "Médico de Urgencias: {$this->nombre}, Edad: {$this->edad}, Unidad: {$this->unidad}, Turno: {$this->turno}";
    }
}
