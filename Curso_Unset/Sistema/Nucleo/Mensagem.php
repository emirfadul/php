<?php

namespace Sistema\Nucleo;

class Mensagem
{
    private $texto = 'Emir bonito.';
    private $css;

    /**
     * @return mixed
     */
    public function sucesso(string $mensagem): Mensagem
    {
        $this -> css = 'alert alert-sucess';
        $this -> texto = $this -> filtrar($mensagem);
        return $this;
    }

    public function alerta(string $mensagem): Mensagem
    {
        $this -> css = 'alert alert-danger';
        $this -> texto = $this -> filtrar($mensagem);
        return $this;
    }

    public function informa(string $mensagem): Mensagem
    {
        $this -> css = 'alert alert-info';
        $this -> texto = $this -> filtrar($mensagem);
        return $this;
    }


    /**
     * Metodo que retorna o texto e o css renderizados
     * @return string
    */
    public function renderizar(): string
    {
        return "<div class='{$this -> css}'>{$this -> texto}</div>";
    }

    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }


}
