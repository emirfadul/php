<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>

        <?php
            $num = $_POST['n'] ?? 0;
            $int = (int)$num;
            $fra = $num - $int;
            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário.</p>";
            echo "<ul>";
            echo "<li>Parte Inteira: " . number_format($int, 0, ",", ".") . "</li>";
            echo "<li>Parte Fracionária: " . number_format($fra, 3, ",", ".") . "</li>";
            echo "</ul>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>

</body>

</html>