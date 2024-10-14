<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $equipos = [
            "Real Madrid" => [
                "entrenador" => [
                    "nombre" => "Zinedine Zidane",
                    "imagen" => "imagenes/zidane.jpg"  
                ],
                "jugadores" => [
                    [
                        "nombre" => "Thibaut Courtois",
                        "imagen" => "imagenes/courtois.jpg"  
                    ],
                    [
                        "nombre" => "Sergio Ramos",
                        "imagen" => "imagenes/ramos.jpg"
                    ],
                    [
                        "nombre" => "Eden Hazard",
                        "imagen" => "imagenes/hazard.jpg"
                    ]
                ]
            ],
            "Barcelona" => [
                "entrenador" => [
                    "nombre" => "Ronald Koeman",
                    "imagen" => "imagenes/koeman.jpg"
                ],
                "jugadores" => [
                    [
                        "nombre" => "Marc-André ter Stegen",
                        "imagen" => "imagenes/terstegen.jpeg"
                    ],
                    [
                        "nombre" => "Gerard Piqué",
                        "imagen" => "imagenes/pique.jpg"
                    ],
                    [
                        "nombre" => "Antoine Griezmann",
                        "imagen" => "imagenes/griezmann.jpg"
                    ]
                ]
            ]
        ];
    ?>  
    <h1> Equipos de futbol </h1>
    <form method="post">
        <label for="equipo">Equipo: *</label>
        <select name="equipo" id="equipo">
            <option value="Real Madrid">Real Madrid</option>
            <option value="Barcelona">Barcelona</option>
        </select>
        <br>
        <br>

        <label for="puesto">Puesto: *</label>
        <label for="entrenador">entrenador</label>
        <input type="radio" name="puesto" id="entrenador" value="entrenador">
        
        <label for="jugadores">jugadores</label>
        <input type="radio" name="puesto" id="jugadores" value="jugadores">
        <br>
        <input type="submit" value="mostrar datos">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if(!empty($_POST['equipo']) && !empty($_POST['puesto'])) {
                $equipo = $_POST['equipo'];
                $puesto = $_POST['puesto'];
                
                echo "<table border='1'>";
                if($puesto == 'entrenador') {
                    echo "<th colspan='3'>" .  $equipo . ". entrenador " . "</th>";
                    echo "<tr>";
                    echo "<td>" . $equipos[$equipo]['entrenador']['nombre'] ."<td>";
                    echo "<td><img src='" . $equipos[$equipo]['entrenador']['imagen'] . "' width='250' height='300'></td>";
                    echo "</tr>";
                } elseif ($puesto == 'jugadores') {
                    echo "<th colspan='3'>" .  $equipo . ". jugadores " . "</th>";
                    foreach($equipos[$equipo]['jugadores'] as $jugador) {
                        echo "<tr>";
                        echo "<td>" . $jugador['nombre'] . "<td>";
                        echo "<td><img src='" . $jugador['imagen'] . "' width='250' height='300'></td>";
                    }
                }
                echo "</table>";
            }

                
            }
        
    ?>
</body>
</html>