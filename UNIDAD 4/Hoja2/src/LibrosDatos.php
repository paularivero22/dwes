<?php
namespace App;

class LibrosDatos {
    public static function mostrar() {
        $libros = FuncionesBD::obtenerLibros();

        echo "<h1>Libros Registrados</h1>";
        echo "<table border='1'>
                <tr>
                    <th>Número de ejemplar</th>
                    <th>Título</th>
                    <th>Año de Edición</th>
                    <th>Precio</th>
                    <th>Fecha de Adquisición</th>
                </tr>";

        foreach ($libros as $libro) {
            echo "<tr>
                    <td>{$libro['num_ejemplar']}</td>
                    <td>{$libro['titulo']}</td>
                    <td>{$libro['ano_edicion']}</td>
                    <td>{$libro['precio']}</td>
                    <td>{$libro['fecha_adquisicion']}</td>
                  </tr>";
        }

        echo "</table>";
    }
}
