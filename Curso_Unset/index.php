<?php

require_once 'Sistema/configuracao.php';

require 'vendor/autoload.php';
//require 'rotas.php';

echo 'Sistema rodando...';

echo '<br>';

use Sistema\Nucleo\Conexao;

$con = Conexao::getInstancia();
