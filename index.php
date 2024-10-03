<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .calculator {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .calculator h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .calculator input[type="text"] {
            width: 100%;
            height: 40px;
            text-align: right;
            margin-bottom: 20px;
            font-size: 1.5em;
            padding-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .calculator .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
        }

        .calculator button {
            height: 50px;
            font-size: 1.2em;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
        }

        .calculator button:hover {
            background-color: #ddd;
        }

        .equal {
            background-color: #4CAF50;
            color: white;
        }

        .equal:hover {
            background-color: #45a049;
        }
    </style>
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
                <button type="button" onclick="setOperation('divide')">÷</button>

                <button type="button" onclick="appendNumber('4')">4</button>
                <button type="button" onclick="appendNumber('5')">5</button>
                <button type="button" onclick="appendNumber('6')">6</button>
                <button type="button" onclick="setOperation('multiply')">x</button>

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
</body>
</html>
