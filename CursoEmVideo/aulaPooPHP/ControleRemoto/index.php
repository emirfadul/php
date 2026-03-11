<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
    <h1>Controle remoto</h1>

    <pre>
    <?php
    date_default_timezone_set('America/Manaus');
    require_once 'ControleRemoto.php';


    $c = new ControleRemoto();

    $c->ligar();
    $c->aumentarVolume();
    $c->abrirMenu();


    ?>
    </pre>

</body>

</html>