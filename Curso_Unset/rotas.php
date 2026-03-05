<?php

// Incluir arquivos necessários para configurações e autoloader
require_once __DIR__ . '/Sistema/configuracao.php'; // Define constantes como SITE_NOVO, URL_DESENVOLVIMENTO, etc.
require_once __DIR__ . '/vendor/autoload.php'; // Carrega Composer, incluindo SimpleRouter e outros pacotes

use Pecee\SimpleRouter\SimpleRouter;
use Sistema\Nucleo\helpers; // Para usar funções como localhost() e url()

try {
    // Configurar namespace padrão para controladores
    SimpleRouter::setDefaultNamespace('Sistema\Controlador');

    // Definir rotas principais
    // Usando SITE_NOVO como base (provavelmente '/') - ajuste se necessário
    SimpleRouter::get(SITE_NOVO, 'SiteControlador@index');
    SimpleRouter::get(SITE_NOVO . 'sobre', 'SiteControlador@sobre');

    // Exemplo de rota adicional para erro (integra com erro.php se existir)
    SimpleRouter::get(SITE_NOVO . 'erro', function () {
        include __DIR__ . '/erro.php';
    });

    // Configurações adicionais para integração (ex.: base URL baseada em ambiente)
    if (helpers::localhost()) {
        // Ambiente de desenvolvimento: habilite depuração se necessário
        SimpleRouter::enableDebug(true);
    }

    // Iniciar o roteador
    SimpleRouter::start();

} catch (\Exception $ex) {
    // Manipulação de erros mais robusta: exibe mensagem e loga se em produção
    echo 'Erro no roteamento: ' . $ex->getMessage();
    if (!helpers::localhost()) {
        // Em produção, logue o erro em vez de exibir stack trace
        error_log($ex->getMessage());
        echo ' Ocorreu um erro interno. Tente novamente mais tarde.';
    } else {
        // Em desenvolvimento, mostre stack trace para depuração
        echo '<pre>' . $ex->getTraceAsString() . '</pre>';
    }
}
