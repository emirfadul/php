<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 2</title>
    <link rel="stylesheet" href="/desafio2/style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <h2>Gerando um numero aleatorio</h2>
        <?php
            $num = rand(1, 100);
            echo "O numero (0 e 100) gerado foi <strong>$num</strong>";
        ?>
        <button onclick="javascript:history.go(0)">&#x2B05; Gerar outro</button>

    </main>

</body>

</html>