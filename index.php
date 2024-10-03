<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>
  
</head>
<body>
    <div class="calculator">
        <h1>Calculadora</h1>
        <form action="function.php" method="POST">
            <input type="text" name="display" id="display" readonly>
            <div class="buttons">
                <button type="button" onclick="appendNumber('7')">7</button>
                <button type="button" onclick="appendNumber('8')">8</button>
                <button type="button" onclick="appendNumber('9')">9</button>
                <button type="button" onclick="setOperation('divide')">/</button>

<<<<<<< HEAD
                <button type="button" onclick="appendNumber('4')">4</button>
                <button type="button" onclick="appendNumber('5')">5</button>
                <button type="button" onclick="appendNumber('6')">6</button>
                <button type="button" onclick="setOperation('multiply')">*</button>

                <button type="button" onclick="appendNumber('1')">1</button>
                <button type="button" onclick="appendNumber('2')">2</button>
                <button type="button" onclick="appendNumber('3')">3</button>
                <button type="button" onclick="setOperation('subtract')">-</button>

                <button type="button" onclick="appendNumber('0')">0</button>
                <button type="button" onclick="clearDisplay()">C</button>
                <button type="button" onclick="setOperation('sum')">+</button>
                <button type="submit" class="equal">=</button>
            </div>

            <input type="hidden" name="num1" id="num1">
            <input type="hidden" name="num2" id="num2">
            <input type="hidden" name="operation" id="operation">
        </form>

        <?php
        if (isset($_GET['result'])) {
            echo "<h2>Resultado: " . htmlspecialchars($_GET['result']) . "</h2>";
        }
        ?>
    </div>

    <script>
        let display = document.getElementById('display');
        let num1 = document.getElementById('num1');
        let num2 = document.getElementById('num2');
        let operation = document.getElementById('operation');
        let operatorClicked = false;

        function appendNumber(number) {
            if (operatorClicked) {
                display.value = number;
                operatorClicked = false;
            } else {
                display.value += number;
            }
        }

        function setOperation(op) {
            num1.value = display.value;
            operation.value = op;
            operatorClicked = true;
        }

        function clearDisplay() {
            display.value = '';
            num1.value = '';
            num2.value = '';
            operation.value = '';
        }
    </script>
=======
    <?php
    // Mostrar el resultado, si está disponible
    if (isset($_GET['result'])) {
        echo "<h2>Resultado: " . htmlspecialchars($_GET['result']) . "</h2>";
    }
    ?>
    <!-- ArmV17 -->
    <!-- isapana -->
>>>>>>> 68c49c3b52aa853a698d72064e9d900d8a2462cf
</body>
</html>
