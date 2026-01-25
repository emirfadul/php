<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $valor1 = $_GET['dividendo'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 0;  
        $resto = $valor1 % $valor2;  
        $resultado = intdiv($valor1, $valor2);
    ?>

    <main>
        <h1>Divisão de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$valor1?>" >
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" value="<?=$valor2?>" >
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h1>Estrutura da Divisão</h1>
        <?php        
            echo "<h1>$valor1          |            $valor2</h1>";
            echo "<h1>                  _______________________</h1>";
            echo "<h1> $resto          |          $resultado </h1>";


        ?>
    </section>
    
</body>
</html>