<?php

use App\Helpers;
use App\PDOCrearProducto;
use App\CrearProducto;

require '../vendor/autoload.php';

$errores = [];

// Validaciones
if (!Helpers::validarRequerido($_POST['nombre']) || !Helpers::validarRequerido($_POST['precio']) || !Helpers::validarRequerido($_POST['descripcion'])) {
    $errores[] = "Por favor, rellena todos los datos.";
}

if (!Helpers::validarNumerico($_POST['precio'])) {
    $errores[] = "Por favor, introduce un precio válido.";
}

if (!Helpers::validarSubidaFichero($_FILES['imagen'])) {
    $errores[] = "No se puede procesar el archivo.";
}

if (!Helpers::validarFormatoImagen($_FILES['imagen']['name'])) {
    $errores[] = "El archivo no tiene una extensión válida.";
}

if (empty($errores)) {
    $nombreImagen = uniqid() . '-' . $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], __DIR__ . "/productos/$nombreImagen");

    $producto = [
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'descripcion' => $_POST['descripcion'],
        'imagen' => $nombreImagen
    ];

    $servicio = new CrearProducto(new PDOCrearProducto());
    if ($servicio->ejecutar($producto)) {
        echo "El producto ha sido dado de alta correctamente.";
    } else {
        $errores[] = "No se ha podido guardar el producto en base de datos.";
    }
}

if (!empty($errores)) {
    foreach ($errores as $error) {
        echo "<p>$error</p>";
    }
}
