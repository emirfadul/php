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
<h1>Curso PHP unset</h1>


<?php

//date_default_timezone_set('America/Manaus');
//$data = date('d/m/Y H:i:s');
//echo 'Manaus, ' . $data;
//echo '<br>';

//$hora = $_GET["hora"];

//if ($hora == 0 and $hora <= 5) {
//    echo 'Boa madrugada';
//} else if ($hora >= 6 and $hora <= 11) {
//    echo 'Bom dia';
//} else if ($hora >= 12 and $hora <= 17) {
//    echo 'Boa tarde';
//} else if ($hora >= 17) {
//    echo 'Boa noite';
//}
//    echo '</br>';
//    $texto = 'emir fadoul sobreira';
//    echo "O nome \"$texto\" com a funçao TRIM, possui" . mb_strlen(trim($texto)) . " letras.";
//    echo '</br>';
//    echo "O nome \"$texto\" sem a funçao TRIM, possui" . mb_strlen($texto) . " letras.";
//    echo '</br>';
//    echo 'o texto cortado é ' . $corte = mb_substr($texto, 3, 10);
//    echo '</br>';
//    echo 'A letra R, esta na posiçáo ' . $letra = mb_strrpos($texto, 'r');


/**
 * @param string $texto texto a ser criado
 * @param int $limite valor limite de caracter
 * @param string $continue texto ao final do resumo
 * @return string texto resumido
 */
//function resumirTexto($texto, $limite, $continue = '...')
//{
//    $textoLimpo = trim($texto);
//    if (mb_strlen($textoLimpo) <= $limite) {
//        return $textoLimpo;
//    }
//    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
//    return $resumirTexto . $continue;
//}

/**
 * conta o tempo decorrido de uma data
 * @param string $data
 * @return string
 */
//function contarTempo(string $data)
//{
//    $agora = strtotime(date('Y-m-d H:i:s'));
//    $tempo = strtotime($data);
//    $diferenca = $agora - $tempo;
//
//    $segundos = $diferenca % 60;
//    $minutos = round($diferenca / 60);
//    $hora = round($diferenca / 3600);
//    $dias = floor($diferenca / (60 * 60 * 24));
//
//    if ($segundos <= 60) {
//        return 'agora';
//    } elseif ($minutos <= 60) {
//        return $minutos == 1 ? 'ha 1 minuto' : 'ha ' . $minutos . 'minutos';
//    } elseif ($hora <= 24) {
//        return $hora == 1 ? 'ha 1 hora' : 'ha ' . $hora . 'horas';
//    } elseif ($dias <= 7) {
//        return $dias == 1 ? 'ha 1 dia' : 'ha ' . $dias . 'dias';
//    } else {
//        return date('d/m/Y', strtotime($data));
//    }
//}

/**
 * valida o email digitado     *
 * @param string $email
 * @return bool
 */

//$email = $_GET['email'];
//$url = $_GET['url'];
//function validarEmail(string $email): bool
//{
//    return filter_var($email, FILTER_VALIDATE_EMAIL);
//}
//
//if (validarEmail($email)) {
//    echo 'email valido';
//    echo '<br>';
//} else {
//    echo 'email invalido';
//    echo '<br>';
//};
//
//function validarUrl(string $url): bool
//{
//    return filter_var($url, FILTER_VALIDATE_URL);
//}
//
//if (validarUrl($url)) {
//    echo 'URL valido';
//    echo '</br>';
//} else {
//    echo 'URL invalido';
//    echo '</br>';
//};

function localhost(): bool
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    if($servidor == 'localhost'){
        return true;
    }
    return false;
}


function url (string $url): string
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = (!$servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    return $ambiente . $url;
}

/**
 * @return string
 */
function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date ('Y');

    $nomeDiasSemana = ['domingo', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado'];

    $nomeMeses = [ 'janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro',
            'outubro', 'novembro', 'dezembro'
    ];
    return $nomeDiasSemana[$diaSemana].', '.$diaMes . ' de '. $nomeMeses[$mes]. ' de '. $ano;
}


function slug (string $string):string
{
    return $string;
}

echo "<a href=\"index.php\">Voltar</a>";


?>

</body>

</html>