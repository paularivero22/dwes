<?php
namespace MiProyecto\Clases;

use MiProyecto\Traits\Mensaje;

class Avion extends ElementoVolador {
    use Mensaje;

    private string $companiaAerea;
    private string $fechaAlta;
    private float $altitudMaxima;

    public function __construct(string $nombre, int $numAlas, int $numMotores, string $companiaAerea, string $fechaAlta, float $altitudMaxima) {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function getCompaniaAerea(): string {
        return $this->companiaAerea;
    }

    public function mostrarInformacion(): void {
        $this->mostrarMensaje("Nombre: $this->nombre, Compañía: $this->companiaAerea, Altitud Máxima: $this->altitudMaxima");
    }

    public function volar(float $altitud): void {
        // Implementar la lógica para el vuelo del avión
    }
}
?>
