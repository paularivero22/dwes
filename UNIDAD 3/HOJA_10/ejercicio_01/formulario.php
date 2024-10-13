<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $marcas = [
            "toyota" => ["Corolla", "Camry", "Hilux"],
            "ford" => ["Fiesta", "Focus", "Mustang"],
            "honda" => ["Civic", "Accord", "CR-V"]
        ];
    ?>
    <h1>Busca tu coche</h1>
    <hr>
    <br>
    <form method="post">
        <label for="marcas">Marca: *</label>
        <select name="marcas" id=marcas>
            <option value="toyota">Toyota</option>
            <option value="ford"> Ford </option>
            <option value="honda"> Honda </option>
        </select>

        <input type="submit" value="Mostrar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $marcaElegida = $_POST['marcas'];
            $modelos = $marcas[$marcaElegida];
            echo "<table border='1'>";
            echo "<tr>";

            foreach ($modelos as $modelo) {
                 echo "<td>$modelo</td>";
            }
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>