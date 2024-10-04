<?php
namespace MiProyecto\Clases;

use MiProyecto\Traits\Mensaje;

class Helicoptero extends ElementoVolador {
    use Mensaje;

    private string $propietario;
    private int $nRotor;

    public function __construct(string $nombre, int $numAlas, int $numMotores, string $propietario, int $nRotor) {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->propietario = $propietario;
        $this->nRotor = $nRotor;
    }

    public function getNRotor(): int {
        return $this->nRotor;
    }

    public function mostrarInformacion(): void {
        $this->mostrarMensaje("Nombre: $this->nombre, Propietario: $this->propietario, Número de Rotores: $this->nRotor");
    }

    public function volar(float $altitud): void {
        // Implementar la lógica para el vuelo del helicóptero
    }
}
?>
