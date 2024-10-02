<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>

<body>
    <?php
    $verbos = ["Amar", "Correr", "Vivir"];
    $numVerbos;

    for ($i = 0; $i < count($verbos); $i++) {
        $numVerbos++;
    }
    $verbo = rand(1, $numVerbos);

    function conjugarVerbo($verbo)
    {
        $terminacion = substr($verbo, -2); // Obtener la terminación del verbo
        $raiz = substr($verbo, 0, -2); // Obtener la raíz del verbo
    
        $conjugaciones = [
            "yo" => "",
            "tú" => "",
            "él" => "",
            "nosotros" => "",
            "vosotros" => "",
            "ellos" => ""
        ];

        switch ($terminacion) {
            case "ar":
                $conjugaciones["yo"] = $raiz . "o";
                $conjugaciones["tú"] = $raiz . "as";
                $conjugaciones["él"] = $raiz . "a";
                $conjugaciones["nosotros"] = $raiz . "amos";
                $conjugaciones["vosotros"] = $raiz . "áis";
                $conjugaciones["ellos"] = $raiz . "an";
                break;

            case "er":
                $conjugaciones["yo"] = $raiz . "o";
                $conjugaciones["tú"] = $raiz . "es";
                $conjugaciones["él"] = $raiz . "e";
                $conjugaciones["nosotros"] = $raiz . "emos";
                $conjugaciones["vosotros"] = $raiz . "éis";
                $conjugaciones["ellos"] = $raiz . "en";
                break;

            case "ir":
                $conjugaciones["yo"] = $raiz . "o";
                $conjugaciones["tú"] = $raiz . "es";
                $conjugaciones["él"] = $raiz . "e";
                $conjugaciones["nosotros"] = $raiz . "imos";
                $conjugaciones["vosotros"] = $raiz . "ís";
                $conjugaciones["ellos"] = $raiz . "en";
                break;

            default:
                return "Verbo no válido.";
        }

        return $conjugaciones;
    }

    ?>
</body>

</html>