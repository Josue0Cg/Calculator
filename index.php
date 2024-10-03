
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
            <button type="button" onclick="appendOperation('/')">÷</button> 

            <button type="button" onclick="appendNumber('4')">4</button>
            <button type="button" onclick="appendNumber('5')">5</button>
            <button type="button" onclick="appendNumber('6')">6</button>
            <button type="button" onclick="appendOperation('*')">x</button> 

            <button type="button" onclick="appendNumber('1')">1</button>
            <button type="button" onclick="appendNumber('2')">2</button>
            <button type="button" onclick="appendNumber('3')">3</button>
            <button type="button" onclick="appendOperation('-')">-</button>

            <button type="button" onclick="appendNumber('.')">.</button>
            <button type="button" onclick="appendNumber('0')">0</button>
            <button type="button" onclick="appendOperation('+')">+</button>
            <button type="submit" class="equal">=</button>

       
            <button type="button" onclick="clearDisplay()">C</button> 
            <button type="button" onclick="deleteLastCharacter()">⌫</button> 
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

    function appendNumber(value) {
        display.value += value;
        expression.value = display.value; 
    }

    function appendOperation(op) {
        display.value += ` ${op} `;
        expression.value = display.value; 
    }

    function clearDisplay() {
        display.value = '';
        expression.value = '';
    }

    function deleteLastCharacter() {
        display.value = display.value.slice(0, -1);
        expression.value = display.value; 
    }

    function calculateResult(event) {
        event.preventDefault(); 
        try {
            let result = eval(expression.value.replace('x', '*').replace('÷', '/'));
            display.value = result; 
            expression.value = result;
        } catch (error) {
            display.value = "Error";
        }
    }
</script>
