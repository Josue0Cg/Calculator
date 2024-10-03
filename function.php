<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los números y la operación del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Realizar la operación según la opción seleccionada
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
            if ($num2 == 0) {
                $result = 'Error: No se puede dividir por cero';
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = 'Operación inválida';
            break;
    }

    // Redirigir de vuelta a index.html con el resultado
    header("Location: index.html?result=" . urlencode($result));
    exit();
}
?>
