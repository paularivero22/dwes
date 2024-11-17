<?php
namespace App;

class Producto {
    protected int $codigo;
    protected float $precio;
    protected string $nombre;
    protected Categoria $categoria;

    public function __construct(int $codigo, float $precio, string $nombre, Categoria $categoria) {
        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
    }

    public function getCodigo(): int {
        return $this->codigo;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCategoria(): Categoria {
        return $this->categoria;
    }

    public function setCategoria(Categoria $categoria): void {
        $this->categoria = $categoria;
    }

    public function __toString(): string {
        return "Producto [Código: $this->codigo, Nombre: $this->nombre, Precio: $this->precio, Categoría: {$this->categoria->getNombre()}]";
    }
}
