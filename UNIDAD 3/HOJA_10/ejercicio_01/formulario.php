<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Modelos de Coche</title>
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
        <select name="marcas" id="marcas">
            <option value="toyota">Toyota</option>
            <option value="ford">Ford</option>
            <option value="honda">Honda</option>
        </select>

        <input type="submit" value="Mostrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $marcaElegida = $_POST['marcas'];

        //Si se ha seleccionado una marca, mostramos los modelos

        if (isset($marcaElegida)) {
            $modelos = $marcas[$marcaElegida];
            echo "<form method='post'>";
            echo "<input type='hidden' name='marcas' value='$marcaElegida'>";
            echo "<table border='1'>";
            echo "<tr><th colspan='3'>" . $marcaElegida . "</th></tr>";
            echo "<tr>";

            // Mostramos los modelos en cajas de texto
            foreach ($modelos as $indice => $modelo) {
                echo "<td><input type='text' name='modelos[$indice]' value='$modelo'></td>";
            }

            echo "</tr>";
            echo "</table>";
            echo "<br>";
            echo "<input type='submit' name='actualizar' value='Actualizar'>";
            echo "</form>";
        }

        if (isset($_POST['actualizar'])) {
            foreach ($_POST['modelos'] as $indice => $modeloModificado) {
                // comparamos los modelos originales con los modificados
                if ($modeloModificado !== $marcas[$marcaElegida][$indice]) {
                    echo "El modelo " . $marcas[$marcaElegida][$indice] . " ha sido actualizado a $modeloModificado";
                    // Actualizamos el modelo en el array original (solo para esta ejecución)
                    $marcas[$marcaElegida][$indice] = $modeloModificado;
                }
            }
        }
    }
    ?>
</body>

</html>