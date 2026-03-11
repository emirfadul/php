<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    // Método construtor para inicializar os atributos
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // Implementação dos métodos da interface Controlador

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function aumentarVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 3);
        }
    }

    public function diminuirVolume()
    {
        if ($this->ligado) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function abrirMenu()
    {
        
        echo "-------- MENU --------\n";
        echo "Está ligado? " . ($this->getLigado() ? "Sim" : "Não") . "\n";
        echo "Está tocando? " . ($this->getTocando() ? "Sim" : "Não") . "\n";
        echo "Volume: " . $this->getVolume();
        for ($i = 0; $i < $this->volume; $i += 10) {
            echo "|";
        }
        echo "\n----------------\n";
        echo '<br>';
    
        //  echo "TV está desligada, não posso abrir o menu.\n";
        
    }

    public function fecharMenu()
    {
        if ($this->ligado) {
            echo "Fechando menu...\n";
        } else {
            echo "TV está desligada, não há menu para fechar.\n";
        }
    }

    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
            
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && !$this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && !($this->getVolume() == 0)) {
            $this->setVolume(50);
        }
    }

// Métodos getters e setters para os atributos privados

    /**
     * Get the value of volume
     */
    private function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     */
    private function setVolume($volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */
    private function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     */
    private function setLigado($ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */
    private function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     */
    private function setTocando($tocando): self
    {
        $this->tocando = $tocando;

        return $this;
    }
}
