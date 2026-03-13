<?php

class Livro
{
    private $titulo;
    private $autor;
    private $disponivel;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getDisponivel()
    {
        return $this->disponivel; // Corrigido: retorna o atributo diretamente
    }

    public function setDisponivel($disponivel)
    {
        $this->disponivel = $disponivel; // Corrigido: define o atributo diretamente
    }

    public function emprestar()
    {
        if ($this->disponivel) {
            $this->disponivel = false;
            return "O livro '" . $this->titulo . "' foi emprestado.";
        } else {
            return "O livro '" . $this->titulo . "' não está disponível para empréstimo.";
        }
    }

    public function devolver()
    {
        if (!$this->disponivel) {
            $this->disponivel = true;
            return "O livro '" . $this->titulo . "' foi devolvido.";
        } else {
            return "O livro '" . $this->titulo . "' já está disponível.";
        }
    }

    public function status()
    {
        echo  "Título: " . $this->titulo;
        echo '<br>';
        echo "Autor: " . $this->autor;
        echo '<br>';
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n";
    }
}

// Exemplo de uso
$livro = new Livro();

$livro->setTitulo("O Senhor dos Anéis");
$livro->setAutor("J.R.R. Tolkien");
$livro->setDisponivel(true);

echo $livro->emprestar();
echo '<br>';
echo $livro->status();
