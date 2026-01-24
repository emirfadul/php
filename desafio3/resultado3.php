<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="/desafio3/style.css">
</head>

<body>
    <main>
        <h1>Conversão de Real para Dolar</h1>
        <?php
            $cotacao = $_GET['cotacao'];
            $reais = $_GET['reais'];
            $dolar = $reais / $cotacao;
            echo "<p>Com R$ " . number_format($reais, 2, ',', '.') . " você pode comprar US$ " . number_format($dolar, 2, '.', ',') . "</p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>

</body>

</html>