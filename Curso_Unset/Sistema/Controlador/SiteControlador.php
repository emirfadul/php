<?php

namespace Sistema\Controlador;

use Sistema\Nucleo\Controlador;

class SiteControlador extends Controlador
{
    public function __construct(string $diretorio)
    {
        parent::__construct($diretorio);
    }

    public function index():void
    {
        echo 'Página Inicial';
    }

    public function sobre(): void
    {
        echo 'Página Sobre';
    }
}


