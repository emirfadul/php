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
        <h2>Gerando um numero aleatorio entre 0 e 100</h2>
        <?php
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            $num1 = random_int($min, $max);
            echo "O numero (0 e 100) gerado foi <strong>$num</strong>";
            echo "<br>O numero (0 e 100) gerado criptografado foi <strong>$num1</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x2B05; Gerar outro</button>

    </main>

</body>

</html>