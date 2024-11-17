<?php

namespace App;

use App\Repositorio\ProductoRepositorioInterface;

class CrearProducto
{
    private ProductoRepositorioInterface $repositorio;

    public function __construct(ProductoRepositorioInterface $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function ejecutar(array $producto): bool
    {
        return $this->repositorio->crear($producto);
    }
}
