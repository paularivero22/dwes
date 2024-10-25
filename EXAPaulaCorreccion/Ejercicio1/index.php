<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        $contactos = isset($_POST['contactos']) ? $_POST['contactos'] : [
            [
                "nombre" => "Juan Perez",
                "email" => "juan.perez@gmail.com",
                "telefono" => "652678987"
            ],
            [
                "nombre" => "Maria Lopez",
                "email" => "maria.lopez@gmail.com",
                "telefono" => "656714560"
            ]
        ];
    ?>
    
    <h1> Gestion de contactos </h1>
    <form method="post">
        <label for="nombre">Nombre: *</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="email">Correo Electronico: *</label>
        <input type="text" name="email" id="email" required>
        <br><br>
        <label for="telefono">Telefono: *</label>
        <input type="text" name="telefono" id="telefono" required>
        <br><br>
        <?php
            foreach($contactos as $indice => $contacto) {
                echo "<input type='hidden' name='contactos[$indice][nombre]' value='{$contactos['nombre']}'>";
                echo "<input type='hidden' name='contactos[$indice][email]' value='{$contactos['email']}'>";
                echo "<input type='hidden' name='contactos[$indice][telefono]' value='{$contactos['telefono']}'>";
            }
        ?>
        <input type="submit" value="Agregar Contacto">
        <br><br>
    </form>
<?php
    require_once('Validaciones.php');

    

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
                //validar los valores
                $nombre = validarNombre($_POST["nombre"]);
                $email = validarEmail($_POST["email"]);
                $telefono = validarTelefono($_POST["telefono"]);

                if($nombre && $email && $telefeno) {
                    $nombre = $_POST["nombre"];
                    $email = $_POST["email"];
                    $telefono = $_POST["telefono"];
                    
                    $contactos[] = [
                        "nombre" => $nombre,
                        "email" => $email,
                        "telefono" => $telefono
                    ];
                } else {
                    /*
                    if(!$nombre) {
                        $mensaje = 2;
                    } elseif(!$email) {
                        $mensaje = 3;
                    } elseif(!$telefono) {
                        $mensaje = 4;
                    }
                    */
                }

                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Email</th>";
                echo "<th>Telefono</th>";
                foreach ($contactos as $contacto) {
                    echo "<tr>";
                    echo "<td>" . $contacto["nombre"] . "</td>";
                    echo "<td>" . $contacto["email"] . "</td>";
                    echo "<td>" . $contacto["telefono"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }  
?>
</body>
</html>
