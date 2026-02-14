<!doctype html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNSET PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Curso PHP unset</h1>

<!--  <form action="helpers.php" method="get">-->
<!--      <label for="nome">Hora em Numeral:</label>-->
<!--      <input type="text" name="hora" id="hora">-->
<!--      <input type="radio" name="sexo" id="masc"  checked>-->
<!--      <label for="masc">Masculino</label></br>-->
<!--      <input type="radio" name="sexo" value="fem">-->
<!--      <label for="fem">Feminino</label>-->
<!---->
<!--      <input type="submit" value="Enviar">-->
<!--  </form>-->

<?php
//declare(strict_types=1);
//require_once 'configuracao.php';
echo '<br>';
include_once 'helpers.php';

//  $string = 'Olá, mundo!';
//  $int = 10;
//  $float = 10.5;
//  $bool = true;
//  $nulo = null;
//
//  //var_dump($float);
//  //echo '<br>';
//  echo saudacao();
//echo '<br>';
//echo resumirTexto($texto, '50', 'continue');

//$texto = strip_tags('<h1> Texto</h1> <p>para </p> <h2> resumir</h2>');
//
//echo resumirTexto($texto, 50);
//echo '</br>';

date_default_timezone_set('America/Manaus');
//$data = date('d/m/Y H:i:s');
//echo 'Manaus, ' . $data;
//echo '<br>';

echo contarTempo('2025-02-12 12:05:45');

echo "<a href=\"index.php\">Voltar</a>";
?>


</body>

</html>