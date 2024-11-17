<?php
require '../vendor/autoload.php';

use App\DB;

$categorias = DB::getCategorias();
$categoriaSeleccionada = $_GET['categoria'] ?? null;
$productos = [];

if ($categoriaSeleccionada) {
    $productos = array_filter(DB::getProductos(), function ($producto) use ($categoriaSeleccionada) {
        return $producto->getCategoria()->getId() == $categoriaSeleccionada;
    });
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías</title>
</head>
<body>
    <h1>Categorias</h1>
    <form method="get">
        <select name="categoria">
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria->getId() ?>" <?= $categoriaSeleccionada == $categoria->getId() ? 'selected' : '' ?>>
                    <?= $categoria->getNombre() ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <h2>Productos</h2>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li><?= $producto ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
