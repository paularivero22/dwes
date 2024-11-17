<?php
require '../vendor/autoload.php';

use App\DB;

$productos = DB::getProductos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos del Supermercado</title>
</head>
<body>
    <h1>Productos del Supermercado</h1>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li><?= $producto ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
