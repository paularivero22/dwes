<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\CPDOCrearProducto;
use App\CrearProducto;
use App;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['nombre']) && !isset($_POST['nombre']) && !isset($_POST['precio']) && !isset($_POST['descripcion']) && !isset($_POST['imagen']))
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_FILES['imagen'];

    if (!validar_requerido($nombre) || !validar_requerido($precio) || !validar_requerido($descripcion) || !validar_subida_fichero($imagen)) {
        echo "Rellena todos los datos";
    }
}
?>