<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP Unset</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Curso PHP</h1>



<?php

$hora = $_GET["hora"];

if ($hora == 0 and $hora <= 5) {
    echo 'Boa madrugada';
} else if ($hora >= 6 and $hora <= 11) {
    echo 'Bom dia';
} else if ($hora >= 12 and $hora <= 17) {
    echo 'Boa tarde';
} else if ($hora >= 17) {
    echo 'Boa noite';
}

echo '<br/>';
echo "<a href=\"index.php\">Voltar</a>";

?>

</body>
</html>

