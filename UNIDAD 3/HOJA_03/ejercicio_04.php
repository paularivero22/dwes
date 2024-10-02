<?php
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Valores del Array \$_SERVER</title>";
    echo "<style>";
    echo "table { width: 100%; border-collapse: collapse; }";
    echo "th, td { border: 1px solid black; padding: 10px; text-align: left; }";
    echo "th { background-color: #f2f2f2; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Valores del Array \$_SERVER</h2>";
    echo "<table>";
    echo "<tr><th>Nombre de la Variable</th><th>Valor</th></tr>";

    foreach ($_SERVER as $i => $valor) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($i) . "</td>";
        echo "<td>" . htmlspecialchars($valor) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</body>";
    echo "</html>";
?>
