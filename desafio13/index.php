<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Caixa Eletronico</h1>
        
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual valor deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>" step="5" >  
            <p style="font-size: 0.7em">* Notas disponíveis: 100, 50, 10 e 5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>   
 
     <?php   

            $valor = $_GET['valor'] ?? 0;  

            $resto = $valor;
            
            $tot100 = floor($resto / 100);
            $resto %= 100;
            
            $tot50 = floor($resto / 50);
            $resto %= 50;
            
            $tot10 = floor($resto / 10);
            $resto %= 10;
            
            $tot5 = floor($resto / 5);
            $resto %= 5;
    ?>

    <section id="resultado">       

        <h2>Saque de R$ .... realizado</h2>
        <p>Caixa eletronico entregará as seguintes notas:</p>

        <ul>
            <li><img src="/desafio13/100.jpg" alt=""> x <?=$tot100 ?></li>
            <li><img src="/desafio13/50.jpg" alt=""> x <?=$tot50 ?></li>
            <li><img src="/desafio13/10.jpg" alt=""> x <?=$tot10 ?></li>
            <li><img src="/desafio13/5.jpg" alt=""> x <?=$tot5 ?></li>
        </ul>       
       
    </section>
    
</body>
</html>