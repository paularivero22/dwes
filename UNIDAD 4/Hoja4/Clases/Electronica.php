<?php
namespace App;

class Electronica extends Producto {
    private int $plazoGarantia;

    public function __construct(int $codigo, float $precio, string $nombre, int $plazoGarantia, Categoria $categoria) {
        parent::__construct($codigo, $precio, $nombre, $categoria);
        $this->plazoGarantia = $plazoGarantia;
    }

    public function getPlazoGarantia(): int {
        return $this->plazoGarantia;
    }

    public function __toString(): string {
        return parent::__toString() . ", Plazo de Garantía: $this->plazoGarantia meses";
    }
}
