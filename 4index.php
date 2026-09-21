<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vendas</title>
</head>
<body>
    <h1>Calcular Vendas</h1>
    <form method="GET">
        <label>Coloque a quantidade de vendas</label><br>
        <input type="number" name="valor1" min="1" required><br><br>

        <label>Coloque o preço de cada produto (em centavos)</label><br>
        <input type="number" name="valor2" min="1" required><br><br>

        <button type="submit">Calcule</button>
    </form>

    <?php
    if (isset($_GET["valor1"]) && isset($_GET["valor2"])) {
        $quantidade = (int)$_GET["valor1"];
        $preco = (int)$_GET["valor2"];
        
        $total = ($quantidade * $preco) / 100;
        
        echo "<h2>O total é: R$ " . number_format($total, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>