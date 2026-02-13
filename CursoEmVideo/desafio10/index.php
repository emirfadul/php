<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>" >  

            <label for="ano">Quer saber sua idade em qual ano?(atualmente estamos em <?=date('Y')?>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>" >            
                         
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <?php 

        $nasc = $_GET['nasc'] ?? 0;  
        $ano = $_GET['ano'] ?? 0;

        $idade = $ano - $nasc;
        
    ?>
 

    <section id="resultado">
        <h1>Resultado</h1>
        
        <?php   
            echo "Quem nasceu em <strong>". $nasc . "</strong> vai ter <strong>". $idade . "</strong> em <strong>". $ano . "</strong>";
        ?>
    </section>
    
</body>
</html>