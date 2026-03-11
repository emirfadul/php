<?php

require_once 'Controlador.php';

class Lutador implements Controlador
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
    public function apresentar()
    {

        echo "Nome: " . $this->getNome() . "<br>";
        echo "Nacionalidade: " . $this->getNacionalidade() . "<br>";
        echo "Idade: " . $this->getIdade() . " anos<br>";
        echo "Altura: " . $this->getAltura() . " m<br>";
        echo "Peso: " . $this->getPeso() . " kg<br>";
        echo "Vitórias: " . $this->getVitorias() . "<br>";
        echo "Derrotas: " . $this->getDerrotas() . "<br>";
        echo "Empates: " . $this->getEmpates() . "<br>";
    }

    public function status()
    {
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo ", com " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e ";
        echo $this->getEmpates() . " empates.</p>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Métodos Especiais
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    /**
     * Get the value of nome
     */
    private function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    private function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */
    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     */
    private function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get the value of idade
     */
    private function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    private function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of altura
     */
    private function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    private function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of peso
     */
    private function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    private function setPeso($peso): self
    {
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }

    /**
     * Get the value of categoria
     */
    private function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     */
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

    /**
     * Get the value of vitorias
     */
    private function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * Set the value of vitorias
     */
    private function setVitorias($vitorias): self
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    /**
     * Get the value of derrotas
     */
    private function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set the value of derrotas
     */
    private function setDerrotas($derrotas): self
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    /**
     * Get the value of empates
     */
    private function getEmpates()
    {
        return $this->empates;
    }

    /**
     * Set the value of empates
     */
    private function setEmpates($empates): self
    {
        $this->empates = $empates;

        return $this;
    }
}