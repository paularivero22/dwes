<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Suma de cantidades</h1>
    <form method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='number' name='numeros[]' id='numero$i' required>";
            echo "<br><br>";
        }
        ?>
        <input type="submit" value="Sumar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $numeros = $_POST['numeros'];
        $suma = array_sum($numeros);
        echo "<h2>La suma es: $suma</h2>";
    }
    ?>
</body>

</html>