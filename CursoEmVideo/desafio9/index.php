<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1o Valor:</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" >   
            <label for="peso1">1o Peso:</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" >
            <label for="valor2">2o Valor:</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" >
            <label for="peso2">2o Peso:</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" >
                 
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
     
        $valor1 = $_GET['valor1'] ?? 0;  
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;  
        $peso2 = $_GET['peso2'] ?? 1;

        $media_aritmetica = ($valor1 + $valor2) / 2;
        $media_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);        
        
    ?>
 

    <section id="resultado">
        <h1>Cálculo das Médias</h1>
        
        <?php   
            echo "Analisando os valores <strong>". number_format($valor1, 2, ',', '.') . "</strong> e <strong>". number_format($valor2, 2, ',', '.') . "</strong> informados pelo usuario:<br><br>";
            echo "<ul><li>A média aritmética de <strong>". number_format($valor1, 2, ',', '.') . "</strong> e <strong>". number_format($valor2, 2, ',', '.') . "</strong> é <strong>". number_format($media_aritmetica, 2, ',', '.') . "</strong><br></li>";
            echo "<li>A média ponderada de <strong>". number_format($valor1, 2, ',', '.') . "</strong> e <strong>". number_format($valor2, 2, ',', '.') . "</strong> é <strong>". number_format($media_ponderada, 2, ',', '.') . "</strong><br></li></ul";
        ?>
    </section>
    
</body>
</html>