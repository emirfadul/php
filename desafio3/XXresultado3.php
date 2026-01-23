<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="/desafio3/style.css">
</head>

<body>
    <main>
        <h1>Conversão de Real para Dolar</h1>
        <?php        
            $cotacao = $_GET['cotacao'];
            $real = $_GET['numero'] ?? 0;
            $dolar = $real / $cotacao;
            //echo "O valor R\$ " . number_format($real, 2, ',', '.') . " equivale a US\$$ " . number_format($dolar, 2, '.', ',');

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<strong>Os seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . ".</strong>";
            echo "<br><br>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>

</body>

</html>