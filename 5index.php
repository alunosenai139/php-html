<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>cualculo de reajuste</title>
</head>
<body>
    <h1>Calcular Taxa de Reajuste</h1>
    <form method="GET">
        <label>Coloque o valor:</label><br>
        <input type="number" name="valor1" step="any" required><br><br>

        <label>Coloque a porcentagem:</label><br>
        <input type="number" name="valor2" step="any" required><br><br>

        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET["valor1"]) && isset($_GET["valor2"])) {
        $valor1 = (float)$_GET["valor1"];
        $valor2 = (float)$_GET["valor2"];
        $reajuste = $valor1 + ($valor1 * ($valor2 / 100));
        
        echo "<h2>O valor reajustado é: " . htmlspecialchars(number_format($reajuste, 2, ',', '.')) . "</h2>";
    }
    ?>
</body>
</html>