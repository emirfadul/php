<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <pre>
            <?php
            setcookie("dia_da_semana", "SABADO", time() + 3600); // 1 hora

            session_start();
            $_SESSION["nome"] = "FUNCIONOU!";

            echo "<h1> Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1> Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1> Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1> Superglobal COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1> Superglobal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1> Superglobal ENV</h1>";
            var_dump($_ENV);
            
            echo "<h1> Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1> Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);

            ?>
        </pre>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>
</body>

</html>