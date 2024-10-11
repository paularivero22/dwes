<?php

require 'vendor/autoload.php';
use Validator\IbanValidator;

$validator = new IbanValidator();
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $iban = $_POST['iban'] ?? '';
    $ccc = $_POST['ccc'] ?? '';

    if ($validator->validarIBAN($iban)) {
        $resultado = 'IBAN válido';
    } else {
        $resultado = 'IBAN inválido';
    }

    if ($validator->validarCCC($ccc)) {
        $resultado .= ' y CCC válido';
    } else {
        $resultado .= ' y CCC inválido';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador IBAN</title>
</head>

<body>
    <h1>Validador de IBAN y CCC</h1>
    <form method="POST">
        <label for="iban">Introduzca el IBAN:</label>
        <input type="text" name="iban" id="iban" required>
        <br>
        <label for="ccc">Introduzca el CCC:</label>
        <input type="text" name="ccc" id="ccc" required>
        <br>
        <button type="submit">Validar</button>
    </form>
    <p><?php echo $resultado; ?></p>
</body>

</html>