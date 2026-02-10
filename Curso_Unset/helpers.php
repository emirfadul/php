<?php

function saudacao()
{
    $hora = 5;

    if ($hora == 0 and $hora <= 5) {
        $saudacao = 'Boa madrugada';
    } else if ($hora >= 6 and $hora <= 11) {
        $saudacao = 'Bom dia';
    } else if ($hora >= 12 and $hora <= 17) {
        $saudacao = 'Boa tarde';
    }
    return $saudacao;
}

function resumirTexto($texto, int $limite, string $continue)
{
    return $texto . $limite . $continue;
}
