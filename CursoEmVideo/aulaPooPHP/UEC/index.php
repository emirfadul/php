<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Aula POO - UEC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <h1>U E C</h1>
    <div class="container text-center" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">

        <div class="card" style="width: 18rem;">
            <img src="/CursoEmVideo/aulaPooPHP/UEC/lutador1.jpeg" class="card-img-top" height="300px" alt="lutador1">
            <div class="card-body">
                <?php
                date_default_timezone_set('America/Manaus');
                require_once 'Lutador.php';
                $lutador1 = new Lutador("Pretty_Boy", "França", 31, 1.75, 68, 11, 11, 2, 1);
                $lutador1->apresentar();
                // $lutador1->status();
                ?>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="/CursoEmVideo/aulaPooPHP/UEC/lutador2.jpeg" class="card-img-top" height="300px" alt="lutador1">
            <div class="card-body">
                <?php
                date_default_timezone_set('America/Manaus');
                require_once 'Lutador.php';
                $lutador2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3, 1);
                $lutador2->apresentar();
                // $lutador2->status();
                ?>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="/CursoEmVideo/aulaPooPHP/UEC/lutador4.jpeg" class="card-img-top" height="300px" alt="lutador1">
            <div class="card-body">
                <?php
                date_default_timezone_set('America/Manaus');
                require_once 'Lutador.php';
                $lutador3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1, 1);
                $lutador3->apresentar();
                // $lutador3->status();
                ?>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="/CursoEmVideo/aulaPooPHP/UEC/lutador4.jpeg" class="card-img-top" height="300px" alt="lutador1">
            <div class="card-body">
                <?php
                date_default_timezone_set('America/Manaus');
                require_once 'Lutador.php';
                $lutador4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2, 1);
                $lutador4->apresentar();
                // $lutador4->status();
                ?>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="/CursoEmVideo/aulaPooPHP/UEC/lutador5.jpeg" class="card-img-top" height="300px" alt="lutador1">
            <div class="card-body">
                <?php
                date_default_timezone_set('America/Manaus');
                require_once 'Lutador.php';
                $lutador5 = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3, 1);
                $lutador5->apresentar();
                // $lutador5->status();
                ?>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="/CursoEmVideo/aulaPooPHP/UEC/lutador5.jpeg" class="card-img-top" height="300px" alt="lutador1">
            <div class="card-body">
                <?php
                date_default_timezone_set('America/Manaus');
                require_once 'Lutador.php';
                $lutador6 = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4, 1);
                $lutador6->apresentar();
                // $lutador6->status();
                ?>
            </div>
        </div>

    </div>



    <!-- <pre>
    <?php
    date_default_timezone_set('America/Manaus');
    require_once 'Lutador.php';

    $lutador1 = new Lutador("Pretty_Boy", "França", 31, 1.75, 68, 11, 11, 2, 1);
    $lutador1->apresentar();
    $lutador1->status();

    $lutador2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3, 1);
    $lutador2->apresentar();
    $lutador2->status();

    $lutador3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1, 1);
    $lutador3->apresentar();
    $lutador3->status();

    $lutador4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2, 1);
    $lutador4->apresentar();
    $lutador4->status();

    $lutador5 = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3, 1);
    $lutador5->apresentar();
    $lutador5->status();

    $lutador6 = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4, 1);
    $lutador6->apresentar();
    $lutador6->status();



    ?>
    </pre> -->

</body>

</html>