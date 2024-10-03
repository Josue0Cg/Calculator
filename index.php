<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Curso AD</title>
</head>
<body>

    <div class="calculator">
        <div id="display">0</div>
        <div class="buttons">
            <button class="clear" onclick="clearDisplay()">C</button>
            <button onclick="appendToDisplay('/')">/</button>
            <button onclick="appendToDisplay('*')">*</button>
            <button onclick="backspace()">←</button>

            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button class="operator" onclick="appendToDisplay('-')">-</button>

            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button class="operator" onclick="appendToDisplay('+')">+</button>

            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button class="equals" onclick="calculate()">=</button>

            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
        </div>
    </div>

    <script>
        function appendToDisplay(value) {
            const display = document.getElementById('display');
            if (display.innerText === '0' || display.innerText === 'Error') {
                display.innerText = value;
            } else {
                display.innerText += value;
            }
        }

        function clearDisplay() {
            document.getElementById('display').innerText = '0';
        }

        function backspace() {
            const display = document.getElementById('display');
            if (display.innerText.length === 1 || display.innerText === 'Error') {
                display.innerText = '0';
            } else {
                display.innerText = display.innerText.slice(0, -1);
            }
        }

        function calculate() {
            const display = document.getElementById('display');
            try {
                display.innerText = eval(display.innerText);
            } catch (e) {
                display.innerText = 'Error';
            }
        }
    </script>

</body>
</html>
