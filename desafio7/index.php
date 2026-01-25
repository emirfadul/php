<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $salarioMinimo = 1380;
        $salario = $_GET['salario'] ?? 0;  
         
        $resultado = intdiv($salario, $salarioMinimo);
        $resto = $salario % $salarioMinimo;
    ?>

    <main>
        <h1>Informe seu Salario</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Salario (R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" >   
            <p>Considere o salario minimo de <strong><?=number_format($salarioMinimo, 2, ',', '.') ?></strong></p>         
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h1>Resultado Final</h1>
        <?php        
            echo "Quem recebe um salario de <strong>". number_format($salario, 2, ',', '.') . "</strong> ganha <strong>". $resultado . "</strong> salarios minimos <br> + <strong>". number_format($resto, 2, ',', '.') . "</strong> reais<br>";        

        ?>
    </section>
    
</body>
</html>