<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    <h1>DESAFIO</h1>
    <h2>1.Faça uma matriz que suporte todos os seus filmes e gêneros que você mais assistiu no ano de 2026, e exiba dois filmes com o seu gênero;</h2>

    <?php
    $filmes = array(
    ["A Serpente Verde", "Animação"],
    ["Kaguya: A Princesa Espacial", "Drama"],
    ["Avatar: O Caminho da Água", "Épico de ficção científica"],
    ["Avatar: Fogo e Cinzas", "Drama"],
    ["Homem-Aranha: Através do Aranhaverso", "Ação"],
    ["Atirador", "Suspense e Drama Policial"]
    );

    echo $filmes[1][0] . " - " . $filmes[1][1] . "<br>";
    echo $filmes[4][0] . " - " . $filmes[4][1] . "<br>";
    ?>

    <h2>2. Criar um formulário  HTML para capturar as informações de cadastro de um cliente e, em seguida, armazenar  essas informações  em  um array PHP e apresentar na tela (nome, idade, email, telefone, endereço).</h2>
<form method="GET">
    <label>Coloque o seu nome</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Coloque a sua idade</label><br>
    <input type="number" name="idade" required><br><br>

    <label>Coloque o seu email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Coloque o seu telefone</label><br>
    <input type="tel" name="telefone" required><br><br>

    <label>Coloque o seu endereço</label><br>
    <input type="text" name="endereco" required><br><br>

    <button type="submit">Pronto</button>
</form>

<?php

if (
    isset($_GET["nome"]) && 
    isset($_GET["idade"]) && 
    isset($_GET["email"]) && 
    isset($_GET["telefone"]) && 
    isset($_GET["endereco"])
) {

    $usuario = array(
        "Nome" => $_GET["nome"],
        "Idade" => $_GET["idade"],
        "Email" => $_GET["email"],
        "Telefone" => $_GET["telefone"],
        "Endereço" => $_GET["endereco"]
    );

    echo "<h3>Dados do Cliente Cadastrado:</h3>";
    echo "<pre>";
    print_r($usuario);
    echo "</pre>";
}
?>

</body>
</html>