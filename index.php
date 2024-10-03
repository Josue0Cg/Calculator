<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Curso AD</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="function.php" method="POST">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operation">
            <option value="sum">Sumar</option>
            <option value="subtract">Restar</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Mostrar el resultado, si está disponible
    if (isset($_GET['result'])) {
        echo "<h2>Resultado: " . htmlspecialchars($_GET['result']) . "</h2>";
    }
    ?>
</body>
</html>
