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
            'titulo'=>'pagina não encontrada'
        ]);
    }

    public function erro404(): void
    {
        echo $this->template->renderizar('404.html', [
            'titulo' => 'Página não encontrada'
        ]);
    }
}


