<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Curso PHP Unset</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Curso PHP</h1>

  <?php
  //declare(strict_types=1);
  require_once 'configuracao.php';
  echo '<br>';
  include_once 'helpers.php';

  $texto = 'emir fadul';
  $string = 'Olá, mundo!';
  $int = 10;
  $float = 10.5;
  $bool = true;
  $nulo = null;

  //var_dump($float);
  //echo '<br>';
  echo saudacao();
  //echo '<br>';
  //echo resumirTexto($texto, '50', 'continue');


  $today = date('l');
  echo '<br>';
  echo $today;




  ?>

</body>

</html>