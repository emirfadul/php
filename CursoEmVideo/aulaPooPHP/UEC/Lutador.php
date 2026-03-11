<?php

class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Métodos Públicos
    function apresentar()
    {
        echo " Nome: " . $this->getNome() . "<br>";
        echo " Nacionalidade: " . $this->getNacionalidade() . "<br>";
        echo " Idade: " . $this->getIdade() . " anos<br>";
        echo " Altura: " . $this->getAltura() . " m<br>";
        echo " Peso: " . $this->getPeso() . " kg<br>";
        echo " Vitórias: " . $this->getVitorias() . "<br>";
        echo " Derrotas: " . $this->getDerrotas() . "<br>";
        echo " Empates: " . $this->getEmpates() . "<br>";
    }

    function status()
    {
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo ", com " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e ";
        echo $this->getEmpates() . " empates.</p>";
    }

    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Métodos Especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    //Getters e Setters
    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    private function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }


    private function getIdade()
    {
        return $this->idade;
    }

    private function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    private function getAltura()
    {
        return $this->altura;
    }

    private function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    private function getPeso()
    {
        return $this->peso;
    }

    private function setPeso($peso): self
    {
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }

    private function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria(): self
    {
        if ($this->peso < 52.2) {
            $this->categoria = 'Inválido';
        } elseif ($this->peso <= 70.3) {
            $this->categoria = 'Leve';
        } elseif ($this->peso <= 83.9) {
            $this->categoria = 'Médio';
        } elseif ($this->peso <= 120.2) {
            $this->categoria = 'Pesado';
        } else {
            $this->categoria = 'Inválido';
        }
        return $this;
    }

    private function getVitorias()
    {
        return $this->vitorias;
    }

    private function setVitorias($vitorias): self
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    private function getDerrotas()
    {
        return $this->derrotas;
    }


    private function setDerrotas($derrotas): self
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    private function getEmpates()
    {
        return $this->empates;
    }

    private function setEmpates($empates): self
    {
        $this->empates = $empates;

        return $this;
    }
}