<?php

namespace Sistema\Controlador;

use Sistema\Nucleo\Controlador;

class SiteControlador extends Controlador
{
    public function __construct()
    {
        parent::__construct('template/site/views');
    }

    public function index():void
    {
        echo $this->template->renderizar('index.html', [
            'titulo'=>'teste de titulo',
            'subtitulo'=>'teste de subtitulo'
        ]);
    }

    public function sobre(): void
    {
        echo $this->template->renderizar('sobre.html',[
        'sobre'=>'texto sobre',
        'sobre2'=>'texto sobre2'
    ]);
    }
}


