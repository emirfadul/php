<?php
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
        if ($this->ligado) {
            $this->setVolume($this->getVolume() + 5);
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
        if ($this->ligado) {
            echo "----- MENU -----\n";
            echo "Está ligado? " . ($this->ligado ? "Sim" : "Não") . "\n";
            echo "Está tocando? " . ($this->tocando ? "Sim" : "Não") . "\n";
            echo "Volume: " . $this->getVolume() . "\n";
            for ($i = 0; $i < $this->volume; $i += 10) {
                echo "|";
            }
            echo "\n----------------\n";
        } else {
            echo "TV está desligada, não posso abrir o menu.\n";
        }
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
        if ($this->ligado && !$this->tocando) {
            $this->tocando = true;
        }
    }

    public function pause()
    {
        if ($this->ligado && $this->tocando) {
            $this->tocando = false;
        }
    }

    public function ligarMudo()
    {
        if ($this->ligado && !$this->tocando) {
            $this->volume = 0;
        }
    }

    public function desligarMudo()
    {
        if ($this->ligado && !$this->tocando) {
            $this->volume = 50;
        }
    }

// Métodos getters e setters para os atributos privados

    /**
     * Get the value of volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     */
    public function setVolume($volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     */
    public function setLigado($ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */
    public function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     */
    public function setTocando($tocando): self
    {
        $this->tocando = $tocando;

        return $this;
    }
}
