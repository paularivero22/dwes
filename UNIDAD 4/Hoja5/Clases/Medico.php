<?php
namespace App;

abstract class Medico {
    protected int $codigo;
    protected string $nombre;
    protected int $edad;
    protected Turno $turno;

    public function __construct(int $codigo, string $nombre, int $edad, Turno $turno) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }

    public function getCodigo(): int {
        return $this->codigo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getTurno(): Turno {
        return $this->turno;
    }

    public function setTurno(Turno $turno): void {
        $this->turno = $turno;
    }

    abstract public function __toString(): string;
}
