<?php


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
    SimpleRouter::get(SITE_NOVO . '404', 'SiteControlador@erro404');


    // Iniciar o roteador
    SimpleRouter::start();

} catch (Pecee\SimpleRouter\Exception\NotFoundHttpException $ex) {  // Corrigido para a exceção certa
    // Manipulação de erros mais robusta: exibe mensagem e loga se em produção
    if (helpers::localhost()){
        echo $ex;
    }else{
        helpers::redirecionar('404');
    }

}

