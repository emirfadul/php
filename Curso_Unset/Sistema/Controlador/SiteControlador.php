<?php

namespace Sistema\Controlador;

use Sistema\Nucleo\Controlador;

class SiteControlador extends Controlador
{
    public function __construct(string $diretorio)
    {
        parent::__construct('templates/site/views/');
    }

    public function index():void
    {
        echo $this->template->renderizar('index.html', [

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


