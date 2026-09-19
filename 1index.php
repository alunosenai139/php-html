<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma</title>
</head>
<body>
    <h1>Somar dois valores</h1>
    <form method="GET">
        <label>Primeiro valor</label><br>
        <input type="number" name="valor1" required><br><br>

        <label>Segundo valor</label><br>
        <input type="number" name="valor2" required><br><br>

        <button type="submit">Somar</button>
    </form>

    <?php
    if (isset($_GET["valor1"]) && isset($_GET["valor2"])) {
        
        $valor1 = $_GET["valor1"];
        $valor2 = $_GET["valor2"];

        $Soma = $valor1 + $valor2;

        echo "<h2>O resultado da soma é: $Soma</h2>";
    }
    ?>
</body>
</html>