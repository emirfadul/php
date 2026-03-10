<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Aula POO</title>
</head>

<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php
    date_default_timezone_set('America/Manaus');
    require_once 'ContaBancaria.php';

    echo '======== Jubileu ========';
    echo '<br>';
    $p1 = new ContaBancaria();
    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p1->setNumConta(111);

    // echo date('Y-m-d H:i:s') . ' - ' . $p1->depositar(300);
    // echo date('Y-m-d H:i:s') . ' - ' . $p1->sacar(100);
    // echo date('Y-m-d H:i:s') . ' - ' . $p1->pagarMensal();
    // echo date('Y-m-d H:i:s') . ' - ' . $p1->sacar(230);
    // echo date('Y-m-d H:i:s') . ' - ' . $p1->fecharConta();
    // print_r($p1);


    // echo '======== Creuza ========';
    // echo '<br>';
    // $p2 = new ContaBancaria();
    // $p2->abrirConta("CP");
    // $p2->setDono("Creuza");
    // $p2->setNumConta(222);

    // echo date('Y-m-d H:i:s') . ' - ' . $p2->depositar(500);
    // echo date('Y-m-d H:i:s') . ' - ' . $p2->sacar(100);
    // echo date('Y-m-d H:i:s') . ' - ' . $p2->pagarMensal();
    // echo date('Y-m-d H:i:s') . ' - ' . $p2->sacar(530);
    // echo date('Y-m-d H:i:s') . ' - ' . $p2->fecharConta();
    // print_r($p2);



    // $c1 = new Caneta("BIC Cristal", "Azul", 0.5, 80);
    // print_r($c1);

    // $c2 = new Caneta("Amarock", "Vermelha", 0.7, 60);
    // print_r($c2);

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