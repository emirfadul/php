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
        $segundos = $_REQUEST['seg'] ?? 0;       
		           
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seg">Qual total de segundos:</label>
            <input type="number" name="seg" id="seg"  step="1" min="0" value="<?=$segundos?>" required>  

            <input type="submit" value="Calcular">
        </form>
    </main>  

    <?php 
        $sobra = $segundos;
        
        $semanas = (int)($sobra / 604800);  
        $sobra = $sobra % 604800;
        
        $dias = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        
        $hora = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        
        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;
        
        $segundo = $sobra;
    ?>
    
    <section id="resultado">
        
        <h1>Totalizando tudo</h1>
        <p>Analisando o valor de <strong><?=$segundos ?></strong> segundos que você digitou, temos o seguinte resultado:</p>
         
        <ul>            
            <li>O total de semanas é <strong> <?=$semanas ?> </strong>semanas</li>
            <li>O total de dias é <strong> <?=$dias ?> </strong>dias</li>
            <li>O total de horas é <strong> <?=$hora ?></strong>horas</li>
            <li>O total de minutos é <strong> <?= $minutos ?> </strong>minutos</li>
            <li>O total de segundos é <strong> <?=$segundo ?></strong> segundos</li>
        </ul>
        
    </section>
    
</body>
</html>