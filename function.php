<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los inputs
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    // Variable para almacenar el resultado
    $result = 0;

    // Realizar la operación
    switch ($operation) {
        case 'sum':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: División por cero";
            }
            break;
        default:
            $result = "Operación no válida";
    }

    // Redirigir de vuelta a la página principal con el resultado
    header("Location: index.php?result=" . urlencode($result));
    exit();
} else {
    // Redirigir de vuelta si no es un POST
    header("Location: index.php");
    exit();
}
