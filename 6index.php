<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>INSS</title>
</head>
<body>
    <h1>Calcular INSS</h1>
    <form method="GET">
        <label>Coloque o seu salário:</label><br>
        <input type="number" name="valor1" step="any" required><br><br>

        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if (isset($_GET["valor1"])) {
        $valor1 = (float)$_GET["valor1"];
        $INSS = 0.0;

        if ($valor1 <= 1621.00) {
            $INSS = $valor1 * 0.075;
        } elseif ($valor1 <= 2902.84) {
            $INSS = ($valor1 * 0.09);
        } elseif ($valor1 <= 4354.27) {
            $INSS = ($valor1 * 0.12);
        } elseif ($valor1 <= 8475.55) {
            $INSS = ($valor1 * 0.14);
        } else {
            $INSS = 988.09;
        }

        echo "<h2>O seu INSS é: R$ " . htmlspecialchars(number_format($INSS, 2, ',', '.')) . "</h2>";
    }
    ?>
</body>
</html>