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
    require_once 'ContaBancaria.php';

    // $c1 = new Caneta("BIC Cristal", "Azul", 0.5, 80);
    // print_r($c1);

    // $c2 = new Caneta("Amarock", "Vermelha", 0.7, 60);
    // print_r($c2);

    $conta = new ContaBancaria();

    $conta->abrirConta("CC");
    $conta->setDono("Emir");
    $conta->depositar(100);
    $conta->pagarMensal();
    $conta->sacar(50);
    $conta->fecharConta();
    $conta->getSaldo();



    // $c1->modelo = "BIC Cristal";
    // $c1->setModelo("BIC Cristal");
    // $c1->setCor("Azul");
    // $c1->setPonta(0.5);
    // $c1->setTampada(false);
    // $c1->setCarga(80);

    // print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} e cor {$c1->getCor()}.\n";

    // echo "A caneta está tampada? " . ($c1->getTampada() ? "Sim" : "Não") . "\n";

    // echo 'Modelo: ' . $c1->getModelo() . "\n";
    // echo 'Cor: ' . $c1->getCor() . "\n";
    // echo 'Ponta: ' . $c1->getPonta() . "\n";

    // echo $c1->getModelo();
    // echo $c1->getCor();
    // echo $c1->getPonta();

    // $c1->carga = 80;
    // $c1->tampada = true;

    // $c1->tampar();s


    // $c1->rabiscar();

    // echo '<br>';

    // $c1->tampar();

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