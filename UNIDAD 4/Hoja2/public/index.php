<?php
require_once '../vendor/autoload.php';

use App\LibrosGuardar;
use App\LibrosDatos;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guardar libro
    $titulo = $_POST['titulo'];
    $ano_edicion = $_POST['ano_edicion'];
    $precio = $_POST['precio'];
    $fecha_adquisicion = $_POST['fecha_adquisicion'];

    $mensaje = LibrosGuardar::guardar($titulo, $ano_edicion, $precio, $fecha_adquisicion);
    echo $mensaje;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
</head>
<body>
    <h1>Registrar un libro</h1>
    <form action="index.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br>

        <label for="ano_edicion">Año de Edición:</label>
        <input type="number" name="ano_edicion" id="ano_edicion" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" step="0.01" required><br>

        <label for="fecha_adquisicion">Fecha de Adquisición:</label>
        <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" required><br>

        <input type="submit" value="Guardar libro">
    </form>

    <form action="libros_datos.php" method="GET">
        <input type="submit" value="Ver libros guardados">
    </form>
</body>
</html>
