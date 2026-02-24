<?php




/**
 * @param string $texto texto a ser criado
 * @param int $limite valor limite de caracter
 * @param string $continue texto ao final do resumo
 * @return string texto resumido
 */
function resumirTexto($texto, $limite, $continue = '...')
{
    $textoLimpo = trim($texto);
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }
    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
    return $resumirTexto . $continue;
}

/**
 * conta o tempo decorrido de uma data
 * @param string $data
 * @return string
 */
function contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca % 60;
    $minutos = round($diferenca / 60);
    $hora = round($diferenca / 3600);
    $dias = floor($diferenca / (60 * 60 * 24));

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'ha 1 minuto' : 'ha ' . $minutos . 'minutos';
    } elseif ($hora <= 24) {
        return $hora == 1 ? 'ha 1 hora' : 'ha ' . $hora . 'horas';
    } elseif ($dias <= 7) {
        return $dias == 1 ? 'ha 1 dia' : 'ha ' . $dias . 'dias';
    } else {
        return date('d/m/Y', strtotime($data));
    }
}

/**
 * valida o email digitado     *
 * @param string $email
 * @return bool
 */

//$email = $_GET['email'];
//$url = $_GET['url'];
//if (validarEmail($email)) {
//    echo 'email valido';
//    echo '<br>';
//} else {
//    echo 'email invalido';
//    echo '<br>';
//};
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
    if ($servidor == 'localhost') {
        return true;
    }
    return false;
}


function url(string $url): string
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
    $ano = date('Y');

    $nomeDiasSemana = ['domingo', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado'];

    $nomeMeses = ['janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro',
            'outubro', 'novembro', 'dezembro'
    ];
    return $nomeDiasSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeMeses[$mes] . ' de ' . $ano;
}


function slug(string $string): string
{

    $mapa ['a'] = '™£¢£™¢£¢∞£¢∞¢∞§∞¢§¶§¶§¶•¶§••§¶•¶§•';
    $mapa['b'] = 'aaaaaaeeeeeeeeeooooooouuuuuuuu';

    $slug = strtr($string, $mapa['a'], $mapa['b']);
    $slug = strip_tags(trim($slug));
    $slug = str_replace(' ', '-', $slug);
    $slug = str_replace(['-----', '----', '---', '--'], '-', $slug);

    return strtolower($slug);
}

function saudacao(): string
{
    $hora = date('H');

    switch ($hora) {
        case ($hora >= 0 && $hora < 12):
            return  $saudacao = 'Bom dia!';
            break;

        case ($hora >= 12 && $hora < 18):
            return $saudacao = 'Boa tarde!';
            break;

        case ($hora >= 18):
            return $saudacao = 'Boa noite!';
            break;

        default:
            return $saudacao = 'Bom dia!';
    $saudacao = match (true) {
        $hora >= 0 and $hora <= 5 => 'Bom dia!',
        $hora >= 6 and $hora <= 11 => 'Boa tarde!',
        $hora >= 12 and $hora <= 17 => 'Boa tarde!',
        $hora >= 18 => 'Boa noite!',
        default => 'Hora incorreta!'
    };
    return $saudacao;
}

function validarCPF(string $cpf): bool
{
    $cpf = limparNumero($cpf);

    for($t = 9; $t < 11; $t++) {
        for($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}

function limparNumero (string $numero): string
{
    return preg_replace('/[^0-9]/', '', $numero);
}




?>