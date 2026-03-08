<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
    <pre>
    <?php

    require_once 'Caneta.php';

    $c1 = new Caneta;
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";
    // $c1->ponta = 0.5;
    // $c1->carga = 80;
    // $c1->tampada = true;

    // $c1->tampar();

    print_r($c1);
    $c1->rabiscar();

    echo '<br>';

    $c1->tampar();

    // echo '<br>';


    // $c2 = new Caneta;
    // $c2->modelo = "Amarock";
    // $c2->cor = "Vermelha";
    // $c2->tampada = true;

    // $c2->tampar();

    // print_r($c2);



    ?>
    </pre>

</body>

</html>