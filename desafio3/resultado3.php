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
            $reais = $_GET['reais'] ?? 0;
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
        
            if ($dados && isset($dados["value"][0]["cotacaoCompra"])) {
                $cotacaoCompra = $dados["value"][0]["cotacaoCompra"];
                $dolares = $reais / $cotacaoCompra;
                echo "<p>Com R$ " . number_format($reais, 2, ',', '.') . " você pode comprar US$ " . number_format($dolares, 2, '.', ',') . "</p>";
            } else {
                echo "<p>Erro ao obter cotação.</p>";
            }
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>

</body>

</html>