<?php

namespace Sistema\Suporte;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;
use Sistema\Nucleo\helpers;

class Template
{
    private Environment $twig;

    public function __construct(string $diretorio)
    {
        $loader = new FilesystemLoader($diretorio);
        $this->twig = new Environment($loader);
        $this->helpers();
    }

    public function renderizar(string $view, array $dados = []): string
    {
        return $this->twig->render($view, $dados);
    }

    private function helpers(): void
    {
        $this->twig->addFunction(
            new TwigFunction('url', function (string $url = null) {
                return helpers::url($url);
            })
        );

        $this->twig->addFunction(
            new TwigFunction('saudacao', function () {
                return helpers::saudacao();
            })
        );

        $this->twig->addFunction(
            new TwigFunction('resumirTexto', function (string $texto, int $limite = 100) {
                return helpers::resumirTexto($texto, $limite);
            })
        );
    }
}