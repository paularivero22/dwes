<?php
namespace MiProyecto\Clases;

use MiProyecto\Traits\Mensaje;

class Aeropuerto {
    use Mensaje;

    private array $elementosVoladores = [];

    public function insertar(ElementoVolador $elemento): void {
        $this->elementosVoladores[] = $elemento;
        $this->mostrarMensaje("Elemento agregado: " . get_class($elemento) . " con nombre: " . $elemento->getNombre());
    }

    public function buscar(string $nombre): void {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre() === $nombre) {
                $elemento->mostrarInformacion();
                return;
            }
        }
        $this->mostrarMensaje("No se encontró el elemento: $nombre");
    }

    public function listarCompania(string $compania): void {
        $encontrado = false;
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Avion && $elemento->getCompaniaAerea() === $compania) {
                $elemento->mostrarInformacion();
                $encontrado = true;
            }
        }
        if (!$encontrado) {
            $this->mostrarMensaje("La compañía $compania no se encuentra.");
        }
    }

    public function rotores(int $numeroRotores): void {
        $encontrados = false;
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Helicoptero && $elemento->getNRotor() === $numeroRotores) {
                $elemento->mostrarInformacion();
                $encontrados = true;
            }
        }
        if (!$encontrados) {
            $this->mostrarMensaje("No se encontraron helicópteros con $numeroRotores rotores.");
        }
    }

    public function despegar(string $nombre, float $altitud, float $velocidad): ?ElementoVolador {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre() === $nombre) {
                $elemento->acelerar($velocidad);
                $elemento->volar($altitud);
                $this->mostrarMensaje("$nombre está despegando.");
                return $elemento;
            }
        }
        $this->mostrarMensaje("No se encontró el elemento para despegar: $nombre");
        return null;
    }
}
?>
