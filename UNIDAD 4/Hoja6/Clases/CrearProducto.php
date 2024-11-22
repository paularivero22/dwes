<?php
namespace App\Clases;
class CrearProducto {
    private $repositorio;

    public function __construct(ProductoRepositorio $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function crear($producto) {
        return $this->repositorio->crear($producto);
    }
}
?>
