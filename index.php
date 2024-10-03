
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora </title>
  
</head>
<body>
<div class="calculator">
    <h1>Calculadora</h1>
    <form action="function.php" method="POST" onsubmit="calculateResult(event)">
        <input type="text" name="display" id="display" readonly>
        <div class="buttons">
            <button type="button" onclick="appendNumber('7')">7</button>
            <button type="button" onclick="appendNumber('8')">8</button>
            <button type="button" onclick="appendNumber('9')">9</button>
            <button type="button" onclick="appendOperation('/')">÷</button> <!-- Modificado a '/' para evaluaciones matemáticas -->

            <button type="button" onclick="appendNumber('4')">4</button>
            <button type="button" onclick="appendNumber('5')">5</button>
            <button type="button" onclick="appendNumber('6')">6</button>
            <button type="button" onclick="appendOperation('*')">x</button> <!-- Modificado a '*' para evaluaciones matemáticas -->

            <button type="button" onclick="appendNumber('1')">1</button>
            <button type="button" onclick="appendNumber('2')">2</button>
            <button type="button" onclick="appendNumber('3')">3</button>
            <button type="button" onclick="appendOperation('-')">-</button>

            <button type="button" onclick="appendNumber('0')">0</button>
            <button type="button" onclick="appendNumber('.')">.</button> <!-- Punto decimal -->
            <button type="button" onclick="appendOperation('+')">+</button>
            <button type="submit" class="equal">=</button>

            <button type="button" onclick="appendNumber('(')">(</button> <!-- Paréntesis izquierdo -->
            <button type="button" onclick="appendNumber(')')">)</button> <!-- Paréntesis derecho -->
            <button type="button" onclick="clearDisplay()">C</button> <!-- Limpiar -->
            <button type="button" onclick="deleteLastCharacter()">⌫</button> <!-- Borrar último carácter -->
        </div>

        <input type="hidden" name="expression" id="expression">
    </form>

    <?php
    if (isset($_GET['result'])) {
        echo "<h2>Resultado: " . htmlspecialchars($_GET['result']) . "</h2>";
    }
    ?>
</div>

<script>
    let display = document.getElementById('display');
    let expression = document.getElementById('expression');

    // Añadir número o símbolo al display
    function appendNumber(value) {
        display.value += value;
        expression.value = display.value; // Actualiza la expresión oculta
    }

    // Añadir operación (suma, resta, multiplicación, división)
    function appendOperation(op) {
        display.value += ` ${op} `;
        expression.value = display.value; // Actualiza la expresión oculta
    }

    // Limpiar el display y las variables
    function clearDisplay() {
        display.value = '';
        expression.value = '';
    }

    // Borrar el último carácter del display
    function deleteLastCharacter() {
        // Elimina el último carácter de la cadena del display
        display.value = display.value.slice(0, -1);
        expression.value = display.value; // Actualiza la expresión oculta
    }

    // Calcular el resultado de la expresión
    function calculateResult(event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto del formulario
        try {
            // Evalúa la expresión matemática introducida por el usuario
            let result = eval(expression.value.replace('x', '*').replace('÷', '/'));
            display.value = result; // Muestra el resultado en el display
            expression.value = result; // Actualiza la expresión oculta con el resultado
        } catch (error) {
            display.value = "Error";
        }
    }
</script>
