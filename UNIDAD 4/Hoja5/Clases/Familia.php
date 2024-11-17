<?php
namespace App;

class Familia extends Medico {
    private int $numPacientes;

    public function __construct(int $codigo, string $nombre, int $edad, Turno $turno, int $numPacientes) {
        parent::__construct($codigo, $nombre, $edad, $turno);
        $this->numPacientes = $numPacientes;
    }

    public function getNumPacientes(): int {
        return $this->numPacientes;
    }

    public function setNumPacientes(int $numPacientes): void {
        $this->numPacientes = $numPacientes;
    }

    public function __toString(): string {
        return "Médico de Familia: {$this->nombre}, Edad: {$this->edad}, Pacientes: {$this->numPacientes}, Turno: {$this->turno}";
    }
}
