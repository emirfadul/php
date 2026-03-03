<?php

namespace Emirfadul\Htdocs\php\Curso_Unset\Sistema\Suporte;

use Twig\Lexer;
use Sistema\Nucleo\helpers;

class Template
{
    private \Twig\Environment $twig;

    private function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twig = new \Twig\Environment($loader);
        $lexer = new Lexer($this->twig, array($this->helpers()));
        $this->twig->setLexer($lexer);
    }

    public function renderizar(string $view, array $dados = []): string
    {
        return $this->twig->render($view, $dados);
    }

    private function helpers(): void
    {
        array(
            $this->twig->addFunction(
                new \Twig\TwigFunction('url', function
                (string $url = null) {
                    return helpers::url($url);
                    }
                )
            ),
            $this->twig->addFunction(
                new \Twig\TwigFunction('saudacao', function
                (string $texto, int $limite = 100) {
                    return helpers::saudacao();
                }
                )
            ),

            $this->twig->addFunction(
                new \Twig\TwigFunction('resumirTexto', function
                (string $texto, int $limite = 100) {
                    return helpers::resumirTexto();
                }
                )
            )
        );
    }


}