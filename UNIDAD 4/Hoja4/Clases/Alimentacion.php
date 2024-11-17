<?php
namespace App;

class Alimentacion extends Producto {
    private int $mesCaducidad;
    private int $anioCaducidad;

    public function __construct(int $codigo, float $precio, string $nombre, int $mesCaducidad, int $anioCaducidad, Categoria $categoria) {
        parent::__construct($codigo, $precio, $nombre, $categoria);
        $this->mesCaducidad = $mesCaducidad;
        $this->anioCaducidad = $anioCaducidad;
    }

    public function getMesCaducidad(): int {
        return $this->mesCaducidad;
    }

    public function getAnioCaducidad(): int {
        return $this->anioCaducidad;
    }

    public function __toString(): string {
        return parent::__toString() . ", Fecha de Caducidad: $this->mesCaducidad/$this->anioCaducidad";
    }
}
