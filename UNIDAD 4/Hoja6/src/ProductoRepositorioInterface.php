<?php

namespace App;

interface ProductoRepositorioInterface
{
    public function crear(array $producto): bool;
}
