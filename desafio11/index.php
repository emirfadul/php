<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 

        $preco = $_GET['preco'] ?? 0;  
        $reajuste = $_GET['reajuste'] ?? 0;

        $novo_preco = $preco + ($preco * $reajuste / 100);
    ?>

    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" >  

            <label for="reajuste">Qual será o percentual de reajuste?(<strong id="valorVolume"><?=$reajuste?></strong>%)</label>           

            <input type="range" id="reajuste" name="reajuste" min="0" max="100" value="<?php echo $_GET['reajuste'] ?? 50; ?>" 
            oninput="document.getElementById('valorVolume').innerHTML = this.value">
                         
            <input type="submit" value="Reajustar preço">
        </form>
    </main>   
 

    <section id="resultado">
        
        <h1>Resultado</h1>
        
        <?php   
            echo "O preço original é R$ <strong>" . number_format($preco, 2, ',', '.') . "</strong><br>";
            echo "Com reajuste de <strong>$reajuste%</strong>, o novo preço é R$ <strong>" . number_format($novo_preco, 2, ',', '.') . "</strong>";
        ?>
    </section>
    
</body>
</html>