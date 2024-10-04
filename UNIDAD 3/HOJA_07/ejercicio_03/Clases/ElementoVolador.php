<?php
namespace MiProyecto\Clases;

use MiProyecto\Interfaces\Volador;

abstract class ElementoVolador implements Volador {
    protected string $nombre;
    protected int $numAlas;
    protected int $numMotores;
    protected float $altitud = 0;
    protected float $velocidad = 0;

    public function __construct(string $nombre, int $numAlas, int $numMotores) {
        $this->nombre = $nombre;
        $this->numAlas = $numAlas;
        $this->numMotores = $numMotores;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getNumAlas(): int {
        return $this->numAlas;
    }

    public function getNumMotores(): int {
        return $this->numMotores;
    }

    public function getAltitud(): float {
        return $this->altitud;
    }

    public function getVelocidad(): float {
        return $this->velocidad;
    }

    public function volando(): bool {
        return $this->altitud > 0;
    }

    public function acelerar(float $velocidad): void {
        $this->velocidad = $velocidad;
    }

    abstract public function volar(float $altitud): void;

    abstract public function mostrarInformacion(): void;
}
?>
