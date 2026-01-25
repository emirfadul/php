<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 

        $segundos = $_GET['segundos'] ?? 0;  
        

        $semanas = $segundos / (7 * 24 * 60 * 60);
        $dias = ($segundos % (7 * 24 * 60 * 60)) / (24 * 60 * 60);
        $horas = (($segundos % (24 * 60 * 60)) / (60 * 60));
        $minutos = (($segundos % (60 * 60)) / 60);
        $segundos = $segundos % 60;
       
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual total de segundos:</label>
            <input type="number" name="segundos" id="segundos" value="<?= sprintf("%d", $segundos) ?>" step="any" >  

            <input type="submit" value="Calcular">
        </form>
    </main>   
 

    <section id="resultado">
        
        <h1>Totalizando tudo</h1>
        
        <?php   
            echo "Analisando o valor de <strong>$segundos</strong> segundos que você digitou, temos o seguinte resultado:<br><br>";
            echo "<ul><li>O total de segundos é <strong>$segundos</strong><br></li>";
            echo "<li>O total de semanas é <strong>$semanas</strong><br></li>";
            echo "<li>O total de dias é <strong>$dias</strong><br></li>";
            echo "<li>O total de horas é <strong>$horas</strong><br></li>";
            echo "<li>O total de minutos é <strong>$minutos</strong><br></li></ul>";
        ?>
    </section>
    
</body>
</html>