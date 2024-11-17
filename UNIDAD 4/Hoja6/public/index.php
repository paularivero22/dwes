<?php require '../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Productos</title>
</head>
<body>
    <h1>Alta de Productos</h1>
    <form action="procesa.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" required><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required></textarea><br>
        
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" required><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
