<!doctype html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNSET PHP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<h1>Curso PHP unset</h1>


<?php

//declare(strict_types=1);
//require_once 'configuracao.php';
//echo '<br>';
//include_once 'helpers.php';

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

//echo contarTempo('2025-02-12 12:05:45');

date_default_timezone_set('America/Manaus');
$data = date('d/m/Y H:i:s');
echo 'Manaus, ' . $data;
echo '<br>';

//require_once 'configuracao.php';
include_once 'helpers.php';
include './Sistema/Nucleo/Mensagem.php';

//echo saudacao();
//echo '<br>';
//echo validarCPF('347.66dsdsdss4.642-49');
//echo limparNumero('347.664.642-49');

//$msg = new Mensagem();
//echo $msg -> sucesso('Mensagem de sucesso') ->renderizar();
//var_dump($msg);

echo (new Mensagem())->sucesso('Mensagem de sucesso')->renderizar();


//echo slug("£™¢£¢∞£¢∞¢∞");
//echo '</br>';
//echo slug("Adao     Negro - 2022");
//echo '</br>';
//echo slug("Adao     Negro - 2022");
//echo '</br>';
//echo slug("Adao      Negro - 2022");

//echo dataAtual();
//echo '</br>';
//echo 'Conteudo da const SITE_NOVO é '.SITE_NOVO;
//echo '</br>';
//echo 'Conteudo da const SITE_ANTIGO é '.constant('SITE_ANTIGO');
//echo '</br>';


//var_dump(localhost());
//var_dump($_SERVER);
//echo '</br>';
//echo $_SERVER['SCRIPT_FILENAME'];
//echo '</br>';
//echo url('/admin');
//echo '</br>';
////$meses = array();
//$meses = [0 =>'janeiro',
//          1=>'fevereiro',
//        2=>'março'
//        ];
//
//var_dump($meses);
//echo '</br>';
//echo $meses[1];
//echo '</br>';


//foreach ($meses as $chave => $valor){
//    echo $chave. '</br>';
//}

?>

<!--  <form action="helpers.php" method="get">-->
<!--      <label for="nome">Validaçáo de Email e URL</label>-->
<!--      <input type="text" name="email" id="email" value="digite seu email">-->
<!--      <input type="text" name="url" id="url" value="digite sua url">-->
<!--      <input type="radio" name="sexo" id="masc" checked>-->
<!--    <label for="masc">Masculino</label></br>-->
<!--     <input type="radio" name="sexo" value="fem">-->
<!--     <label for="fem">Feminino</label>-->
<!---->
<!--      <input type="submit" value="Enviar">-->
<!--  </form>-->


</body>

</html>