<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 1</title>
    <link rel="stylesheet" href="/CursoEmVideo/desafio1ideo/desafio1/style.css">
</head>

<body>
    <main>
        <h1> RESULTADO FINAL</h1>";
        <p>
            <?php

            $numero = $_GET['numero'];
            $ant = $numero - 1;
            $suc = $numero + 1;
            echo "O número escolhido foi $numero <br>";
            echo "O antecessor de $numero é $ant <br>";
            echo "O sucessor de $numero é $suc <br>";
            $dobro = $numero * 2;
            $triplo = $numero * 3;
            $raiz = sqrt($numero);
            echo "O dobro de $numero é $dobro <br>";
            echo "O triplo de $numero é $triplo <br>";
            echo "A raiz quadrada de $numero é $raiz <br>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>

</body>

</html>