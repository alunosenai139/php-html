<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>
<body>
    <h1>calcular IMC</h1>
    <form method="GET">
        <label>Coloque seu peso</label><br>
        <input type="number" name="valor1" required><br><br>

        <label>Coloque sua altura</label><br>
        <input type="number" name="valor2" required><br><br>

        <button type="submit">calcule</button>
    </form>
</html>
    <?php
    if (isset($_GET["valor1"]) && isset($_GET["valor2"])) {
        
        $valor1 = (float)$_GET["valor1"];
        $valor2 = (float)$_GET["valor2"];
        if ($valor2 > 0) {
            $imc = $valor1 / ($valor2 * $valor2);
            echo "<h2>Seu IMC é: " . number_format($imc, 2, ',', '.') . "</h2>";
        } else {
            echo "<h2 style='color: red;'>A altura deve ser maior que zero!</h2>";
        }
    }
    ?>
</body>