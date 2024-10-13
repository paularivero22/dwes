<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Buscador de peliculas </h1>
    <form method="post">
        <label for="busqueda">Buscador </label>
        <input type="text" name="busqueda" id="busqueda">

        <input type="submit" value="busqueda">
    </form>

    <?php
    $peliculas = [
        "tick tick boom" => "imagenes/ticktickboom.jpg",
        "spider-man into the spiderverse" => "imagenes/spiderman.jpg",
        "la princesa mononoke" => "imagenes/mononoke.jpg",
        "el castillo ambulante" => "imagenes/castillo.jpg",
        "barbie" => "imagenes/barbie.jpg" ,
        "your name" => "imagenes/yourName.jpg",
        "klaus"=> "imagenes/klaus.jpg",
        "animales fantasticos y donde encontrarlos" => "imagenes/anmimales.jpg"
    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['busqueda'])) {
            $busqueda = strtolower(trim($_POST['busqueda']));
            $resultados = [];

            foreach ($peliculas as $titulo => $imagen) {
                if (strpos($titulo, $busqueda) !== false) {
                    $resultados[] = [
                        'nombre' => $titulo,
                        'imagen' => $imagen
                    ];
                }
            }

            echo "<h2>Resultados</h2>";
            foreach($resultados as $resultado) {
                echo "<img src='" . $resultado['imagen'] . "' alt='" . $resultado['nombre'] . "' width='200' height='300'>";
                echo "<p>" . $resultado['nombre'] . "</p>";
            }
            
            

        }
    }
    ?>
</body>
</html>