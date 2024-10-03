<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['display']) ? floatval($_POST['display']) : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    $result = 0;

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

    header("Location: index.php?result=" . urlencode($result));
    exit();
} else {
    header("Location: index.php");
    exit();
}
