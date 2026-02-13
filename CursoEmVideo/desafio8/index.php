<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
     
        $numero = $_GET['numero'] ?? 0;  

        $raiz_quadrada = sqrt($numero);
        $raiz_cubica = pow($numero, 1/3);
        
    ?>

    <main>
        <h1>Informe um Numero</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Numero:</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>" >   
                 
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h1>Resultado Final</h1>
        <?php   
            echo "Analisando o numero <strong>". number_format($numero, 2, ',', '.') . "</strong> informado pelo usuario:<br><br>";
            echo "<ul><li>A raiz quadrada de <strong>". number_format($numero, 2, ',', '.') . "</strong> é <strong>". number_format($raiz_quadrada, 2, ',', '.') . "</strong><br></li>";
            echo "<li>A raiz cubica de <strong>". number_format($numero, 2, ',', '.') . "</strong> é <strong>". number_format($raiz_cubica, 2, ',', '.') . "</strong><br></li></ul";

        ?>
    </section>
    
</body>
</html>