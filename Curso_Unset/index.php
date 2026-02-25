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

//require_once './Sistema/configuracao.php';
//include_once './Sistema/Nucleo/helpers.php';
//include './Sistema/Nucleo/Mensagem.php';
//include './Sistema/Nucleo/Controlador.php';

require 'vendor/autoload.php';

require 'rotas.php';

echo SITE_NOVO;

//$document = new \Bissolli\ValidadorCpfCnpj\CPF('347.664.642-49');
//var_dump($document->isValid());

//echo SITE_NOVO;
//echo '<br>';
//
//echo \Sistema\Nucleo\helpers::saudacao();





//use Sistema\Nucleo\Controlador;
//
//$controlador = new Controlador('emir engenheiro');
//echo '<br>';
//var_dump($controlador);


//use Sistema\Nucleo;
//echo helpers::saudacao();

//$helper = new helpers();
//echo $helper->validarCPF('123423424234');

//echo helpers::saudacao();
//echo '<br>';
//echo helpers::limparNumero('347.664.642.-49');
//echo helpers::validarCPF('123.345.567');



//use Sistema\Nucleo\Mensagem as msg;
//echo (new msg)->alerta('alerta lobo 5')->renderizar();
//echo (new msg)->informa('Mensagem de sucesso2')->renderizar();

//echo saudacao();
//echo '<br>';
//echo validarCPF('347.66dsdsdss4.642-49');
//echo limparNumero('347.664.642-49');

//$msg = new Mensagem();
//echo $msg -> sucesso('Mensagem de sucesso') ->renderizar();
//var_dump($msg);




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



</body>

</html>